@props([
    'name',
    'adopter',
    'date',
    'status',
])
<tr>
    <td>{{$name}}</td>
    <td>{{$adopter}}</td>
    <td>{{$date}}</td>
    <td><span class="status-badge status-badge--progress">{{$status}}</span></td>
</tr>


@props([
    'rows' => [],
    'showStatus' => false,
    'showImage' => false,
])
<table class="table">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Adopteur</th>
        <th>Date</th>

        @if($showStatus)
            <th>Status</th>
        @endif

        @if($showImage)
            <th>Image</th>
        @endif
    </tr>
    </thead>

    <tbody>
    @foreach($rows as $row)
        <tr>
            <td>{{ $row->title }}</td>
            <td>{{ $row->adopter }}</td>
            <td>{{ $row->date }}</td>

            @if($showStatus)
                <td>
                    <span class="status-badge status-badge--{{ $row->status }}">
                        {{ $row->status }}
                    </span>
                </td>
            @endif

            @if($showImage)
                <td>
                    <img src="{{ $row->image }}" width="50">
                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
