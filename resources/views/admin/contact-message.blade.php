@extends('admin.layout')

@section('title', 'Contact message details')

@section('content')
    <header class="content-header">
        <div><p class="eyebrow">Contact enquiry</p><h1 class="detail-title">Contact details</h1><p class="muted">Complete information submitted through the contact form.</p></div>
        <a class="back-link" href="{{ route('admin.contact-messages') }}">&lt;- Back to contact</a>
    </header>
    <section class="detail-panel">
        @foreach ((array) $message as $key => $value)
            @if ($key === 'id')
                @continue
            @endif
            <div class="detail-row">
                <dt>{{ str_replace('_', ' ', ucfirst($key)) }}</dt>
                <dd>
                    @if ($key === 'email' && $value)
                        <a href="mailto:{{ $value }}">{{ $value }}</a>
                    @elseif ($key === 'phone' && $value)
                        <a href="tel:{{ $value }}">{{ $value }}</a>
                    @elseif ($key === 'created_at' && $value)
                        {{ \Illuminate\Support\Carbon::parse($value)->format('d M Y') }}
                    @else
                        {{ $value === null || $value === '' ? 'null' : $value }}
                    @endif
                </dd>
            </div>
        @endforeach
    </section>
@endsection
