<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Jac Olivol</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="icon" href="https://jacolivol.com/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
</head>
<body class="admin-page">
    <div class="admin-shell">
        <aside class="sidebar">
            <a class="brand-logo" href="{{ route('admin.applications') }}">
                <img src="https://jacolivol.com/images/jack-olivol.webp" alt="Jac Olivol" onerror="this.style.display='none'">
            </a>
            <div class="sidebar-rule"></div>
            <p class="sidebar-label">Lead desk</p>
            <a class="nav-link {{ request()->routeIs('admin.applications') ? 'active' : '' }}" href="{{ route('admin.applications') }}"><span>01</span> Careers</a>
            <a class="nav-link {{ request()->routeIs('admin.contact-messages') ? 'active' : '' }}" href="{{ route('admin.contact-messages') }}"><span>02</span> Contact</a>
            <div class="sidebar-bottom">
                <p>Jac Olivol admin</p>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="logout-button" type="submit">Sign out</button>
                </form>
            </div>
        </aside>
        <main class="content">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"></script>
    <script>
        function initializeFallbackTable(table) {
            const rows = Array.from(table.tBodies[0]?.rows || []);
            const wrapper = document.createElement('div');
            const tools = document.createElement('div');
            const search = document.createElement('input');
            const length = document.createElement('select');
            const info = document.createElement('span');
            const pagination = document.createElement('div');
            let page = 1;
            let pageLength = 10;

            wrapper.className = 'admin-table-fallback';
            tools.className = 'admin-table-tools';
            search.type = 'search';
            search.placeholder = 'Search records...';
            [10, 25, 50, 100].forEach((size) => {
                length.add(new Option(`Show ${size}`, size));
            });
            tools.append(search, length, info, pagination);
            table.parentElement.insertBefore(wrapper, table);
            wrapper.append(tools, table);

            const render = () => {
                const query = search.value.trim().toLowerCase();
                const matches = rows.filter((row) => row.textContent.toLowerCase().includes(query));
                const pages = Math.max(1, Math.ceil(matches.length / pageLength));
                page = Math.min(page, pages);
                rows.forEach((row) => { row.hidden = true; });
                matches.slice((page - 1) * pageLength, page * pageLength).forEach((row) => { row.hidden = false; });
                info.textContent = matches.length ? `Showing ${(page - 1) * pageLength + 1} to ${Math.min(page * pageLength, matches.length)} of ${matches.length} records` : 'No matching records found';
                pagination.replaceChildren();
                for (let number = 1; number <= pages; number += 1) {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.textContent = number;
                    button.className = number === page ? 'current' : '';
                    button.addEventListener('click', () => { page = number; render(); });
                    pagination.append(button);
                }
            };

            search.addEventListener('input', () => { page = 1; render(); });
            length.addEventListener('change', () => { pageLength = Number(length.value); page = 1; render(); });
            render();
        }

        document.querySelectorAll('.admin-datatable').forEach((table) => {
            if (typeof DataTable !== 'function') {
                initializeFallbackTable(table);
                return;
            }

            new DataTable(table, {
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
                order: [[Number(table.dataset.orderColumn || 0), 'desc']],
                columnDefs: [{ targets: '_all', searchable: true }],
                language: {
                    search: '',
                    searchPlaceholder: 'Search records...',
                    lengthMenu: 'Show _MENU_',
                    info: 'Showing _START_ to _END_ of _TOTAL_ records',
                    infoEmpty: 'No records to show',
                    zeroRecords: 'No matching records found',
                },
            });
        });
    </script>
</body>
</html>
