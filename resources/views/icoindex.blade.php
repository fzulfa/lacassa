<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ICO</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.hideseek.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.hideseek.min.js')}}"></script>
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div align="center"><h1>International Coffee Organisation</h1></div>
     <a href="{{action('IcoController@create')}}" class="btn btn-success">Tambah</a>
    <table class="table table-striped">
      
    <thead>
      <tr>
        <th>ID</th>
        <th>COUNTRY</th>
        <th>YEAR</th>
        <th>MONTH</th>
        <th>TOTAL PRODUCTION</th>
        <th>DOMESTIC CONSUMPTION</th>
        <th>EXPORTABLE PRODUCTION</th>
        <th>GROSS OPENING STOCKS</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($ico as $icos)
      <tr>
        <td>{{$icos['id']}}</td>
        <td>{{$icos['country']}}</td>
        <td>{{$icos['year']}}</td>
        <td>{{$icos['month']}}</td>
        <td>{{$icos['total_production']}}</td>
        <td>{{$icos['domestic_consumption']}}</td>
        <td>{{$icos['exportable_production']}}</td>
        <td>{{$icos['gross_opening_stocks']}}</td>
        <td><a href="{{action('IcoController@edit', $icos["id"])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('IcoController@destroy', $icos["id"])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>


$(document).ready(function() {
$('#search').hideseek({
highlight: true // highlight the keyword.
});
});