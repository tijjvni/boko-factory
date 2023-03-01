<x-docs-layout>
  @section('title', 'Order Products Request')
  <div id="details" class="clearfix">
    <div id="user">
      <div class="title">RESQUET</div>
      <h2 class="name">{{auth()->user()->name}}</h2>
      <div class="time">{{ date('d-m-y')}}</div>
    </div>
  </div>  

  <table>
    <thead>
      <tr>
        <th >S/N</th>
        <th class="desc">Product</th>
        <th class="desc">Available QTY</th>
        <th class="desc">REQUESTED QTY</th>
        <th class="desc">...</th>
      </tr>
    </thead>
    <tbody>
      @foreach($order->products as $key => $product)
        <tr>
          <td >{{$key + 1}}</td>
          <td class="desc">{{ $product->product->name }}</td>
          <td class="">{{ $product->product->quantity}}</td>
          <td class="">{{ $product->quantity }}</td>
          <td class="">{{  }} </td>
        </tr>        
      @endforeach
      <tr>
        <td colspan="4" class="text-right">ORDER: </td>
        <td >ORD {{str_pad($order->id, 5, "0", STR_PAD_LEFT)}}</td>
      </tr>
    </tbody>
  </table>

</x-docs-layout>
