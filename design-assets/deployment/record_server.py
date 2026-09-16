import http.server,json,pathlib
root=pathlib.Path(__file__).resolve().parent
class Handler(http.server.BaseHTTPRequestHandler):
 def do_GET(self):
  body=b'<form method="post"><textarea name="record" id="record"></textarea><button>Save deployment record</button></form>'
  self.send_response(200);self.end_headers();self.wfile.write(body)
 def do_POST(self):
  import urllib.parse
  data=json.loads(urllib.parse.parse_qs(self.rfile.read(int(self.headers['Content-Length'])).decode())['record'][0])
  for key in ['38','235','2']:
   (root/(key+'-published.txt')).write_text(data['published'][key])
  (root/'final.css').write_text(data['css'])
  (root/'browser-qa.json').write_text(json.dumps(data['qa'],indent=2,ensure_ascii=False))
  (root/'originals-private-local.json').write_text(json.dumps(data['originals'],ensure_ascii=False))
  self.send_response(200);self.end_headers();self.wfile.write(b'Deployment record saved')
http.server.HTTPServer(('127.0.0.1',8878),Handler).serve_forever()
