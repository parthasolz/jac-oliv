@extends('admin.layout')

@section('title', 'Applications')

@section('content')
    <header class="content-header">
        <div><h1>Careers</h1><p class="muted">Applicant enquiries received through the careers form.</p></div>
        <div class="header-date">{{ now()->format('l, d M Y') }}</div>
    </header>
    <section class="lead-section">
        <div class="section-heading"><h2>Careers list</h2><span>{{ $applications->count() }} records</span></div>
        <div class="table-wrap"><table class="admin-datatable" data-order-column="4">
            <thead><tr><th>Applicant</th><th>Role</th><th>Contact</th><th>Experience</th><th>Received</th><th>View</th></tr></thead>
            <tbody>
            @foreach ($applications as $application)
                <tr><td><a class="record-link" href="{{ route('admin.application', $application->id) }}"><strong>{{ $application->full_name }}</strong></a></td><td>{{ $application->job_title }}</td><td><a href="mailto:{{ $application->email }}">{{ $application->email }}</a><small>{{ $application->phone }}</small></td><td>{{ $application->total_experience }}</td><td data-order="{{ $application->created_at }}">{{ \Illuminate\Support\Carbon::parse($application->created_at)->format('d M Y') }}</td><td><a class="view-link" href="{{ route('admin.application', $application->id) }}" aria-label="View {{ $application->full_name }} application" title="View career"><i class="fa-solid fa-eye" aria-hidden="true"></i></a></td></tr>
            @endforeach
            </tbody>
        </table></div>
    </section>
@endsection
