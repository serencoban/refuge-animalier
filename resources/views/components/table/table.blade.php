@props([
    'name',
    'adopter',
    'date',
    'status'
])
<tr>
    <td>{{$name}}</td>
    <td>{{$adopter}}</td>
    <td>{{$date}}</td>
    <td><span class="status-badge status-badge--progress">{{$status}}</span></td>
</tr>
