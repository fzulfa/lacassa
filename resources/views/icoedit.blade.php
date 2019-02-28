<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ICO</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('IcoController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="id">ID:</label>
            <input type="text" class="form-control" name="id" value="{{$ico['id']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="country">COUNTRY:</label>
            <input type="text" class="form-control" name="country" value="{{$ico['country']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="year">YEAR:</label>
            <input type="text" class="form-control" name="year" value="{{$ico['year']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="month">MONTH:</label>
            <input type="text" class="form-control" name="month" value="{{$ico['month']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="total_production">TOTAL PRODUCTION:</label>
            <input type="text" class="form-control" name="total_production" value="{{$ico['total_production']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="domestic_consumption">DOMESTIC CONSUMPTION:</label>
            <input type="text" class="form-control" name="domestic_consumption" value="{{$ico['domestic_consumption']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="exportable_production">EXPORTABLE PRODUCTION:</label>
            <input type="text" class="form-control" name="exportable_production" value="{{$ico['exportable_production']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="gross_opening_stocks">GROSS OPENING STOCKS:</label>
            <input type="text" class="form-control" name="gross_opening_stocks" value="{{$ico['gross_opening_stocks']}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
        </div>
      </form>
   </div>
  </body>
</html>