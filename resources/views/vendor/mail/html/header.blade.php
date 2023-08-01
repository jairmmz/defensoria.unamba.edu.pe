@props(['url'])
<tr>
<td class="header">
<a href="defensoria.unamba.edu.pe" target="_blank">
@if (trim($slot) === 'Laravel')
<img src="https://images2.imgbox.com/a3/8d/yJZ2qs3P_o.png" alt="Defensoría Universitaria - UNAMBA">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
