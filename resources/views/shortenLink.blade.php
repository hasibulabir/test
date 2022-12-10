<!DOCTYPE html>  
<html>  
<head>  
    <title>URL Shortener </title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />  
</head>  
<body>  
     
<div class="container">  
    <h1> Laravel  URL Shortener </h1>  
     
    <div class="card">  
      <div class="card-header">  
        <form method="POST" action="{{ route('generate.shorten.link.post') }}">  
            @csrf  
            <div class="input-group mb-3">  
              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">  
              <div class="input-group-append">  
                <button class="btn btn-success" type="submit">Generate Shorten Link</button>  
              </div>  
            </div>  
        </form>  
      </div>  
      <div class="card-body">  
     
            @if (Session::has('success'))  
                <div class="alert alert-success">  
                    <p>{{ Session::get('success') }}</p>  
                </div>  
            @endif 
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
     
            <table class="table table-bordered table-sm">  
                <thead>  
                    <tr>  
                        <th>ID</th>  
                        <th>Short Link</th>  
                        <th>Link</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    @foreach($shortLinks as $row) 
                    
                        <tr>  
                            <td>{{ $row->id }}</td>  
                            <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ $row['slink'] }}</a></td>  
                            <td>{{ $row->link }}</td>  
                        </tr>  
                    @endforeach  
                </tbody>  
            </table> 
      </div>  
    </div>  
     
</div>  
      
</body>  
</html>  