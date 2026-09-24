@extends('admin.layout')

@section('title', 'Contact messages')

@section('content')
    <header class="content-header">
        <div><h1>Contact</h1><p class="muted">Messages received through the general contact form.</p></div>
        <div class="header-date">{{ now()->format('l, d M Y') }}</div>
    </header>
    <section class="lead-section contact-section">
        <div class="section-heading"><h2>Message list</h2><span>{{ $contactMessages->count() }} records</span></div>
        <div class="table-wrap"><table class="admin-datatable" data-order-column="4">
            <thead><tr><th>From</th><th>Enquiry type</th><th>Contact</th><th>Message</th><th>Received</th><th>View</th></tr></thead>
            <tbody>
            @foreach ($contactMessages as $message)
                <tr><td><a class="record-link" href="{{ route('admin.contact-message', $message->id) }}"><strong>{{ $message->first_name }} {{ $message->last_name }}</strong></a></td><td>{{ $message->inquiry_type }}</td><td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a><small>{{ $message->phone }}</small></td><td class="message-cell">{{ $message->message }}</td><td data-order="{{ $message->created_at }}">{{ \Illuminate\Support\Carbon::parse($message->created_at)->format('d M Y') }}</td><td><a class="view-link" href="{{ route('admin.contact-message', $message->id) }}" aria-label="View message from {{ $message->first_name }} {{ $message->last_name }}" title="View message"><i class="fa-solid fa-eye" aria-hidden="true"></i></a></td></tr>
            @endforeach
            </tbody>
        </table></div>
    </section>
@endsection
