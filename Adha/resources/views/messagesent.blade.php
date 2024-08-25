
@foreach($msg as $msg)
<p>{{$msg->name}}</p>
<p>{{$msg->email}}</p>
<p>{{$msg->message}}</p>
@endforeach
