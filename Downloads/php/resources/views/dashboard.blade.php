@extends('layouts.app')

@section('title', 'Dashboard - Flower Shop')

@section('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar h1 {
            font-size: 24px;
        }

        .navbar-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-user span {
            font-size: 14px;
        }

        .btn-logout {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 20px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s;
        }

        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 30px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .stat-card h3 {
            color: #666;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-card .value {
            font-size: 32px;
            font-weight: 700;
            color: #667eea;
        }

        .stat-card .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .section {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .section h2 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #333;
        }

        .flowers-table {
            width: 100%;
            border-collapse: collapse;
        }

        .flowers-table th,
        .flowers-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .flowers-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .flowers-table tr:hover {
            background: #f8f9fa;
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-success {
            background: #d4edda;
            color: #155724;
        }

        .badge-warning {
            background: #fff3cd;
            color: #856404;
        }

        .badge-info {
            background: #d1ecf1;
            color: #0c5460;
        }

        .price {
            font-weight: 600;
            color: #667eea;
        }
    </style>
@endsection

@section('content')
    <nav class="navbar">
        <div class="navbar-content">
            <h1>🌸 Flower Shop Dashboard</h1>
            <div class="navbar-user">
                <span>Welcome, {{ Auth::user()->name }}!</span>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="icon">🌺</div>
                <h3>Total Flowers</h3>
                <div class="value">{{ $totalFlowers }}</div>
            </div>
            <div class="stat-card">
                <div class="icon">💰</div>
                <h3>Total Revenue</h3>
                <div class="value">${{ number_format($totalRevenue, 2) }}</div>
            </div>
            <div class="stat-card">
                <div class="icon">📦</div>
                <h3>Recent Items</h3>
                <div class="value">{{ $flowers->count() }}</div>
            </div>
        </div>

        <div class="section">
            <h2>Recent Flowers</h2>
            <table class="flowers-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($flowers as $flower)
                        <tr>
                            <td><strong>{{ $flower->name }}</strong></td>
                            <td>
                                <span class="badge badge-info">{{ $flower->category ?? 'N/A' }}</span>
                            </td>
                            <td class="price">${{ number_format($flower->price, 2) }}</td>
                            <td>{{ $flower->quantity }}</td>
                            <td>
                                @if($flower->quantity > 20)
                                    <span class="badge badge-success">In Stock</span>
                                @elseif($flower->quantity > 0)
                                    <span class="badge badge-warning">Low Stock</span>
                                @else
                                    <span class="badge" style="background: #f8d7da; color: #721c24;">Out of Stock</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 40px; color: #999;">
                                No flowers found. Add some flowers to get started!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
