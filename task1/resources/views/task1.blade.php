<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
<div class="row">

<form action="/store" method="POST">
@csrf
        <div class="form-row" style="background-color: aqua; width:1100px;">
        <div class="col-md"> <p>  </p><button>اعتماد </button> </div>

        <div class="form-group col-md-3">

                <label for="inputState">السائق</label>
                <select id="inputState" class="form-control" name='drive'>
                    <option selected >  </option>

                    <option>محمد احمد </option>
                  <option>عمر الحداد </option>
                </select>
<span>
{{$errors->first('drive')}}
</span>
        </div>

        <div class="form-group col-md-2">
                <label for="Quantity">الكمية</label>
                <input type="text" class="form-control" name="Quantity" placeholder="الكمية">

         </div>
         <fieldset class="form-group">
                <div class="row">

                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radios" id="gridRadios1" value="لتر" checked>
                      <label class="form-check-label" for="gridRadios1">
                      لترات
                    </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radios" id="gridRadios2" value="مبلغ ">
                      <label class="form-check-label" for="gridRadios2">
                        مبلغ
                      </label>
                    </div>

                  </div>
                </div>
              </fieldset>
              <div class="form-group col-md-3">

                    <label for="inputState">الصنف</label>
                    <select id="inputState" class="form-control" name="type">
                        <option> </option>
                        <option selected>سولار</option>
                      <option>بنزين </option>


                    </select>



         </div>

       <hr style="height:  10px; ">
</div></form>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">الحالة </th>
        <th scope="col">السائق</th>
        <th scope="col">الكمية</th>
        <th scope="col">الصنف</th>
        <th scope="col">التاريخ </th>
        <th scope="col">رقم الطلب </th>
      </tr>
    </thead>
    <tbody>
          @foreach ($key as $item)
          <tr>

        <th scope="row">
        <form action="/update/{{$item->id}}" method="POST">
            @csrf
                @method('PUT')
        <input type="submit" value="ايقاف" name="stutas" ><span>{{ $item->stutas}}</span>


 </form>
        <td>{{$item->driver}}</td>
        <td>{{$item->Quantity}}</td>
        <td>{{$item->type}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->id}}</td>
        <td>   </td>

      </tr>
          @endforeach

    </tbody>
  </table>
</div>
</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
