<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="card" style="margin:15px;">
        <div class="card-header">ข้อมูล {{ $company->name }}</div>
        <div class="card-body">
              <div class="card-body">
              <h5 class="card-title">ชื่อบริษัท : {{ $company->name }}</h5>
              <p class="card-text">email บริษัท : {{ $company->email  }}</p>
              <p class="card-text">เบอร์บริษัท: {{ $company->phon  }}</p>
              <p class="card-text">ที่อยู่บริษัท: {{ $company->address }}</p>
              <a href="{{ route('companies.index') }}" class="btn btn-primary" style="float:right;" >Back</a>
              
        </div>
          </hr>
        </div>
      </div>
</body>
</html>