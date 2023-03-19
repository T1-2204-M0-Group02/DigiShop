@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'DigiShop')
<img src="{{ asset('images/logo/logo1.png') }}" class="logo" alt="DigiShop Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
