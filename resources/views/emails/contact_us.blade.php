<p>Sender Name: <strong>{{ $request->name }}</strong></p>
<p>Sender Phone Number: <strong>{{ $request->phone }}</strong></p>
<p>Sender Email: <strong>{{ $request->email }}</strong></p>
<p>Subject: <strong>{{ $request->subject }}</strong></p>
<p>Message: <strong>{{ $request->message }}</strong></p>

<em>This mail was sent from Layus Investment Company website <a href="{{ url('contact-us') }}">contact us page</a></em>