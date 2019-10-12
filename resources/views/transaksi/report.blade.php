<table class="table table-bordered">
                        <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
                        <tr>
                         <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th> <th>Subtotal</th></tr>
                        <?php $no=1; $total=0; ?>
                         @foreach ($transaksi as $item)
                        <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->tiket->name_tiket }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->tiket->harga_tiket }}</td>
                                <td>{{ $item->tiket->harga_tiket*$item->qty }}</td>
                                
                               <?php $no++ ?>
                                <?php $total=$total+($item->tiket->harga_tiket*$item->qty) ?>
                       @endforeach
                                <tr><td colspan="4"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                    </table>