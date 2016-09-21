<li class="site_list">
    <label>
        <input class="radio" type="radio" name="getoff" value={{ $id }} data-lat="22.54297" data-lng="113.9807">
    </label>
    @if($data==0)
        <span class="icon">下</span>
    @else
        <span class="icon">上</span>
    @endif
    {{ $place }}
</li>