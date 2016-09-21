<tr>
    <td><input type="checkbox" name="{{ $order->id }}" value={{ $order->id }}></td>
    <td><span>{{ $customer->username }}</span></td>
    <td><span>{{ $customer->tel }}</span></td>
    <td><span>￥{{ $order->pay }}</span></td>
</tr>