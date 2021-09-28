<main id="main" class="main-site left-sidebar">
    <div class="container">

        <style>
            th{
                font-size: 10px;
            }
            td{
                font-size: 10px
            }
        </style>
        <div class="row">

            @if (Cart::instance('order')->content()->count()>0)

            <table class="table table-bordered">
                ООО  "KANSLER", именуемое в дальнейшем «ПОСТАВЩИК», в лице Директора  Расулова У.И., действующего на основании Доверенности №3 от 17.06.2021г.
                с одной стороны, и OOO "INTERNATIONAL MEDIA SERVICE", именуемое(ый) в дальнейшем «ПОКУПАТЕЛЬ», в лице __________________________, действующего на
                 основании __________________________ с другой стороны, совместно именуемые "Стороны", заключили настоящий договор о нижеследующем:
                <thead>
                  <tr>
                      <th>id</th>
                    <th>Наименование товаров</th>
                    <th>Ед.изм.</th>
                    <th>'Кол-во</th>
                    <th>Цена без НДС</th>
                    <th>Ставка НДС</th>
                    <th>Ставка НДС</th>
                    <th>Ставка НДС</th>
                    <th>Ставка НДС</th>
                    <th>Цена с НДС</th>
                  </tr>
                </thead>


                @foreach (Cart::instance('order')->content() as $item)



                <tbody>
                  <tr>

                    <td>{{$item->model->id}}</td>
                    <td>{{$item->model->name}}</td>
                    <td>штук</td>
                    <td>{{$item->qty}}</td>
                    <td>{{$item->model->regular_price}}</td>
                    <td>{{$item->model->regular_price}}</td>
                    <td>{{$item->model->regular_price}}</td>
                    <td>15%</td>
                    <td>{{$item->model->regular_price}}</td>
                    <td>{{$item->subtotal}}</td>
                  </tr>

                </tbody>

                @endforeach
            </table>

            @else
                <h4>No item in wishlist</h4>
            @endif
        </div>

    </div>
</main>
