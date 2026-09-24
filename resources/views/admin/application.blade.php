@extends('admin.layout')

@section('title', 'Application details')

@section('content')
    <header class="content-header">
        <div><p class="eyebrow">Career application</p><h1 class="detail-title">Application details</h1><p class="muted">Complete information submitted by the applicant.</p></div>
        <a class="back-link" href="{{ route('admin.applications') }}">&lt;- Back to careers</a>
    </header>
    <section class="detail-panel">
        @foreach ((array) $application as $key => $value)
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
                    @elseif ($key === 'linkedin' && $value)
                        <a href="{{ str_starts_with($value, 'http://') || str_starts_with($value, 'https://') ? $value : 'https://' . $value }}" target="_blank" rel="noopener noreferrer">{{ $value }}</a>
                    @elseif ($key === 'resume')
                        @if ($value && $resumeAvailable)
                            <a class="resume-download" href="{{ route('admin.application.resume', $application->id) }}" title="Download resume"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i><span>Resume PDF</span><i class="fa-solid fa-download" aria-hidden="true"></i></a>
                        @else
                            <span class="resume-unavailable">Resume unavailable</span>
                        @endif
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
