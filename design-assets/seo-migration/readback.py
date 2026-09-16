import urllib.request,re,json,html,sys
PAGES=['/','/pelletskessel/','/waermepumpen/','/gasgeraete/','/klimaanlage-und-klimaanlagenservice/','/badezimmer-und-badzimmersanierung/','/kleine-reparaturen-und-installationen/','/neubauinstallationen/','/sanierungsarbeiten/','/impressum/','/datenschutzerklaerung/']
def get(u):
    r=urllib.request.urlopen(urllib.request.Request('https://www.schmolengruber.at'+u,headers={'User-Agent':'Mozilla/5.0 readback'}),timeout=30)
    return r.status,r.read().decode('utf-8','ignore')
out={}
for u in PAGES:
    st,h=get(u)
    head=h.split('</head>')[0]
    d={'status':st,
       'title':html.unescape((re.search(r'<title>(.*?)</title>',head,re.S) or [None,''])[1].strip()),
       'description':[html.unescape(x) for x in re.findall(r'<meta name="description" content="([^"]*)"',head)],
       'canonical':re.findall(r'<link rel="canonical" href="([^"]*)"',head),
       'robots':re.findall(r'<meta name="robots" content="([^"]*)"',head),
       'og':{k:html.unescape(v) for k,v in re.findall(r'<meta property="(og:[a-z_:]+|twitter:[a-z_:]+|article:[a-z_:]+)" content="([^"]*)"',head)},
       'jsonld':[]}
    for m in re.findall(r'<script type="application/ld\+json"[^>]*>(.*?)</script>',head,re.S):
        try: d['jsonld'].append(json.loads(m))
        except Exception as e: d['jsonld'].append({'parse_error':str(e),'raw':m[:300]})
    out[u]=d
for s in ['/sitemap_index.xml','/page-sitemap.xml','/wp-sitemap.xml','/robots.txt']:
    try:
        st,b=get(s); out[s]={'status':st,'locs':re.findall(r'<loc>([^<]*)</loc>',b),'body_head':b[:400]}
    except Exception as e: out[s]={'error':str(e)}
json.dump(out,open(sys.argv[1],'w'),ensure_ascii=False,indent=1)
for u in PAGES:
    d=out[u]; print(u,d['status'],'| desc',len(d['description']),'| canon',d['canonical'],'| robots',d['robots'],'| og',len(d['og']),'| ld types',[n.get('@type') for j in d['jsonld'] for n in (j.get('@graph',[j]) if isinstance(j,dict) else [])])
for s in ['/sitemap_index.xml','/page-sitemap.xml','/wp-sitemap.xml','/robots.txt']: print(s,out[s].get('status'),len(out[s].get('locs',[])))
