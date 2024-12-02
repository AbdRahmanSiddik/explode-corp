<x-admin>
    <x-slot:title>Admin | Dashboard</x-slot:title>

    <div class="user-wrapper">
        <div class="user-card">
            <h4 class="user-card-title">Summary</h4>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="dashboard-widget color-1">
                        <div class="dashboard-widget-info">
                            <h1>50</h1>
                            <span>Pending Orders</span>
                        </div>
                        <div class="dashboard-widget-icon">
                            <i class="fal fa-list"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="dashboard-widget color-2">
                        <div class="dashboard-widget-info">
                            <h1>250</h1>
                            <span>Completed Orders</span>
                        </div>
                        <div class="dashboard-widget-icon">
                            <i class="fal fa-layer-group"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="dashboard-widget color-3">
                        <div class="dashboard-widget-info">
                            <h1>$15.80k</h1>
                            <span>My Balance</span>
                        </div>
                        <div class="dashboard-widget-icon">
                            <i class="fal fa-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="user-card">
                    <div class="user-card-header">
                        <h4 class="user-card-title">Recent Orders</h4>
                        <div class="user-card-header-right">
                            <a href="order-list.html" class="theme-btn">View All Orders</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless text-nowrap">
                            <thead>
                                <tr>
                                    <th>#Order No</th>
                                    <th>Purchased Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-info">Pending</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-primary">Processing</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="table-list-code">#28VR5K59</span></td>
                                    <td>August 20, 2024</td>
                                    <td>$3,650</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td>
                                        <a href="order-detail.html" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Details"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
