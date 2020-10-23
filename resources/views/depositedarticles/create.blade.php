{{-- \resources\views\customers\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Nouvel article du Panier')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-cart-arrow-down'></i> Nouvel article du Panier
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-cart-arrow-down'></i> Nouvel article du Panier</li>
      </ol>
    </section>

<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        Vous pouvez ajouter autant d'articles au Panier de dépôt en cliquant sur " Ajouter encore un article ".<br>
        Pour terminer le dépôt d'article, Cliquer sur " Valider Dépôt "
      </div>
    </div>

<!-- Main content -->
    <section class="content">
      @include('inc.messages')
      <div class='col-lg-12'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <a href="{{ route('deposits.index') }}" class="btn btn-default pull-right">Liste des Dépôts</a>
                  <h3 class="box-title"><i class='fa fa-cart-arrow-down'></i> Nouvel article du Panier</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('deposits.store') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="box-body">
                      <div class="row">
                        <div class="col-lg-4 col-lg-offset-4">
                          <div class="form-group">
                            <label> Dépôt à faire</label>
                            <select class="form-control article" id="action" name="action" required>
                                <option value="nettoyage_price">Nettoyage à sec</option>
                                <option value="lavage_price">Nettoyage Express</option>
                                <option value="repassage_price">Repassage</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <table id="dynamic_field" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th><label> Désignation</label></th>
                                  <th><label>Description</label></th>
                                  <th><label>Quantité</label></th>
                                  <th><label>Rangement</label></th>
                                  <th><label>Prix Unitaire</label></th>
                                  <th><label>Montant</label></th>
                                  <th><label>Etat</label></th>
                                  <th><button class="btn bg-olive" title="Ajouter Article" id="add" type="button"><i class="fa fa-plus"></i></button> </th>
                              </tr>
                          </thead>

                          <tbody>

                            <tr>

                              <td>
                                <input type="hidden" name="client_id" value="{{$id}}">
                                <div class="form-group">
                                  <select class="form-control article" id="article_id[]" name="article_id[]" required>
                                    @foreach($articles as $article)
                                      <option value="{{$article->id}}">{{$article->title}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </td>

                              <td>
                                <div class="form-group">
                                  <input class="form-control" name="designation[]" type="text" value="" id="designation[]">
                                </div>
                              </td>



                              <td>
                                <div class="form-group">
                                  <input class="form-control qty" name="quantity[]" type="number" value="" id="quantity" required>
                                </div>
                              </td>

                              <td>
                                <div class="form-group">
                                  <select class="form-control tidy" id="tidy" name="tidy[]" required>
                                      <option value="Cintre">Cintre</option>
                                      <option value="Plié(e)">Plié(e)</option>
                                  </select>
                                </div>
                              </td>

                              <td>
                                <div class="form-group">
                                  <input class="form-control price" name="price[]" type="number" value="" id="price[]" required>
                                </div>
                              </td>

                              <td>
                                <div class="form-group">
                                  <input class="form-control amount" name="amount[]" type="number" value="" id="amount[]">
                                </div>
                              </td>
                             
                              <td style="width: 15%">
                                @foreach ($etats as $etat)
                                  <input name="etats_0[]" type="checkbox" value="{{$etat->id}}">
                                  <label>{{$etat->title, ucfirst($etat->title)}}</label><br>
                                @endforeach
                              </td>
                              <td style="border: none;"></td>

                            </tr>
                          </tbody>
                          <tfoot>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td><b>Total</b></td>
                            <td><b class="total"></b></td>

                          </tfoot>
                      </table>

                    <div class="col-lg-3">
                      <div class="form-group">
                          <label for="amount_paid">Avance</label>
                          <input class="form-control" id="amount_paid" name="amount_paid" type="number" value="" required>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                          <label for="discount">Remise</label>
                          <input class="form-control" id="nbre" name="discount" type="number" value="{{$customer->discount}}" min="0" max="100">
                      </div>
                    </div>

                   <div class="col-lg-3" style="display: none;">
                      <div class="form-group">
                        <label for="date_retrait">Date de Retrait</label>
                        <input class="form-control" id="date_retrait" name="date_retrait" type="date" value="">
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group">
                        <label for="date_retrait">Mode de règlement</label>
                        <select class="form-control" id="mode_reglement" name="mode_reglement" required>
                            <option value="AVANCE">Avance</option>
                            <option value="CREDIT">Crédit</option>
                            <option value="ESPECE">Espece</option>
                            <option value="FLOOZ">Flooz</option>
                            <option value="T-MONEY">T-money</option>
                            <option value="AUTRE">Autre</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-3" style="display: none;" id="reference_div">
                      <div class="form-group">
                          <label for="reference">Référence</label>
                          <input class="form-control" id="reference" name="reference" type="text">
                      </div>
                    </div>

                </div>

                <div class="box-footer">
                  
                  <input class="btn btn-flat btn-block bg-olive" type="submit" value="Valider Dépôt">
                </div>

            </form>
          </div>
          <!-- /.box -->

      </div>
    </section>
    <!-- /.content -->


@endsection

@push('js')

<script type="text/javascript">
  var nbre=document.getElementById('nbre');
    nbre.addEventListener("input",function() {
        if(nbre.value < 0 || nbre.value > 100 ) {
            nbre.value = 0;
        }
    });

    var amount_paid=document.getElementById('amount_paid');
    amount_paid.addEventListener("input",function() {
        if(amount_paid.value < 0 ) {
            amount_paid.value = 0;
        }
    });

    var quantity=document.getElementById('quantity');
    quantity.addEventListener("input",function() {
        if(quantity.value < 0 ) {
            quantity.value = 0;
        }
    });
  </script>

<script type="text/javascript">

$(document).ready(function(){  
      var i=1; 
      @php $j = 1; @endphp
      $('#add').click(function(){ 
          //var con = 'etats_'+i+'[]'; 
          //"etats_'+i+'"
           $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="form-group"><select class="form-control article" id="article_id[]" name="article_id[]" required>@foreach($articles as $article)<option value="{{$article->id}}">{{$article->title}}</option>@endforeach</select></div></td><td><div class="form-group"><input class="form-control" name="designation[]" type="text" value="" id="designation[]"></div></td><td><div class="form-group"><input class="form-control qty" name="quantity[]" type="number" value="" id="quantity" required min="0"></div></td><td><div class="form-group"><select class="form-control tidy" id="tidy" name="tidy[]" required><option value="Cintre">Cintre</option><option value="Plie">Vêtement Plié</option></select></div></td><td><div class="form-group"><input class="form-control price" name="price[]" type="number" value="" id="price[]" required></div></td><td><div class="form-group"><input class="form-control amount" name="amount[]" type="number" value="" id="amount[]"></div></td><td style="width: 15%"> @foreach ($etats as $etat)<input name="etats_'+i+'[]" type="checkbox" value="{{$etat->id}}"> <label>{{$etat->title, ucfirst($etat->title)}}</label><br> @endforeach</td><td><button type="button" name="remove" id="'+i+'" class="btn bg-red btn_remove">X</button></td></tr>'); 
              $('.article').trigger('change');
              i++;
              console.log('j ==== '+"{{ $j }}")
      });  

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();
           total();
      }); 

      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });

        $('#mode_reglement').on('change', function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            if((valueSelected === 'FLOOZ') ||  (valueSelected === 'T-MONEY') ||  (valueSelected === 'AUTRE')){
              $('#reference_div').show();
            }else{
              $('#reference_div').hide()
            }
        });

      $('tbody').delegate('.article','change',function (){
        var tr = $(this).parent().parent().parent();
        var id = tr.find('.article').val();
        var e = $('#action').val();
        var dataId={'id':id, 'unit':e};

        $.ajax({
          type : 'GET',
          url : '{!!URL::route('findPrice')!!}',
          dataType: 'json',
          data : dataId,
          success:function(data){
            //console.log(data)
            tr.find('.price').val(data);
          }
        });
      });

      $('.article').trigger('change');

      

      $('tbody').delegate('.article','change',function (){
        var tr = $(this).parent().parent().parent();
          tr.find('.qty').focus();
          total();
      });
      
      $('tbody').delegate('.qty,.price','keyup',function (){
        var tr = $(this).parent().parent().parent();
          var qty= tr.find('.qty').val();
          var price = tr.find('.price').val();
          //console.log(price);
          var amount= (qty * price);
          tr.find('.amount').val(amount);
          total();
      });
 });  

function total() 
{
  var total = 0;
  $('.amount').each(function(i,e){
    var amount = $(this).val()-0;
    total +=amount;
  })
  $('.total').html(total);
};

  Date.prototype.addDays = function(days) {
      var date = new Date(this.valueOf());
      date.setDate(date.getDate() + days);
      return date;
  };

  var date = new Date();
  //alert(date.addDays(5));
  document.getElementById('date_retrait').valueAsDate = date.addDays(2);

 </script>

<script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
    

  
@endpush
