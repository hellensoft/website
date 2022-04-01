<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
HS Customer Contact Form
<!-- <img src="https://hellensoft.co.tz/assets/images/templates/navbar/hs_logo_light.png" class="logo" alt="Laravel Logo"> -->
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
