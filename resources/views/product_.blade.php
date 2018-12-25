    @extends('layout.layout_product')
    @section('main')
        <table >
            <tr>
                <td >
                    <img src=" {{ $Ptdatas[0]->product_image }}"
                    width="300" height="225" alt="喔不,圖片失連了。">
                </td>
                <td></td>
                <td  bgcolor="FFF2F2" >
                    <p>
                        商品名稱：
                        {{ $Ptdatas[0]->product_name }}
                    </p><br>
                    <p>
                        商品價錢：
                        {{ $Ptdatas[0]->product_price }} 元
                    </p><br>
                    <p>
                        庫存&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                        &nbsp{{ $Ptdatas[0]->product_stock }}
                    </p>
                    <p>
                        購買數量：
                        <input type="text">
                    </p>
                </td>
            </tr>
            <tr>
                <td id="p">
                    <?php echo $Ptdatas[0]->product_describe ?>
                </td>
                <td></td>
                <td>
                    <button><a>立即購買</a></button>
                    <button><a>購物車</a> </button>
                </td>
            </tr>
        </table>
        @endsection('main')