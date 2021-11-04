@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
                    <div  style="display:flex; ">
           
                <div style="margin-left: 5px; margin-bottom: 20px; padding: 50px; text-align: center; background-color: #5c1ac3; color: white " class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="card component-card_4">
                    <div class="card-body">
                        <div class="user-profile">
                            {{-- <img src="assets/img/90x90.jpg" class="" alt="..."> --}}
                        </div>
                        <div class="user-info">
                            <h5 class="card-user_name">Total Claims</h5>
                            <p class="card-user_occupation"></p>
                            <div class="card-star_rating">
                               <span class="badge badge-primary" style="font-size:  40px;">12,300</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  style="margin-left:5px; margin-bottom: 20px; padding: 50px; text-align: center; background-color: #e7515a; color: white " class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="card component-card_4">
                    <div class="card-body">
                        <div class="user-profile">
                            {{-- <img src="assets/img/90x90.jpg" class="" alt="..."> --}}
                        </div>
                        <div class="user-info">
                            <h5 class="card-user_name">Total Policies</h5>
                            {{-- <p class="card-user_occupation">Manager</p> --}}
                            <div class="card-star_rating">
                               <span class="badge badge-primary" style="font-size:  40px;">100</span>
                            </div>
                            {{-- <p class="card-text"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p> --}}
                        </div>
                    </div>
                </div>
            </div>
             <div style="margin-bottom: 20px; padding: 50px; text-align: center; background-color: #e2a03f; color: white " class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
               <div class="card component-card_4">
                    <div class="card-body">
                        <div class="user-profile">
                         <img src="assets/img/90x90.jpg" class="" alt="..."> -
                        </div>
                        <div class="user-info">
                            <h5 class="card-user_name">Disbursment</h5>
                            <div class="card-star_rating">
                               <span class="badge badge-primary " style="font-size: 40px;">14,389</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div> 
</div>


            {{-- <div class="widget-content widget-content-area"> --}}

    



            {{-- </div> --}}

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="">Revenue</h5>
                        <ul class="tabs tab-pills">
                            <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                        </ul>
                    </div>

                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent"> 
                                <div id="revenueMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">Claims</h5>
                    </div>
                    <div class="widget-content">
                        <div id="chart-2" class=""></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-two">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-content">
                                <span class="w-value">Partner Distribution</span>
                                {{-- <span class="w-numeric-title">Go to columns for details.</span> --}}
                            </div>
                            <div class="w-icon">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> --}}
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="daily-sales"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-three">
                    <div class="widget-heading">
                        <h5 class="">Insurance Plans</h5>
                    </div>
                    <div class="widget-content">

                        <div class="order-summary">

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                </div>
                                <div class="w-summary-details">
                                    
                                    <div class="w-summary-info">
                                        <h6>Diamond</h6>
                                        <p class="summary-count">16,200</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                </div>
                                <div class="w-summary-details">
                                    
                                    <div class="w-summary-info">
                                        <h6>Silver</h6>
                                        <p class="summary-count">1,515</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                </div>
                                <div class="w-summary-details">
                                    
                                    <div class="w-summary-info">
                                        <h6>Gold</h6>
                                        <p class="summary-count">585</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>

            {{-- last end --}}

            <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-one">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            </div>
                            <div class="w-content">
                                <span class="w-value">18,300</span>
                                <span class="w-numeric-title">Total Subscribers</span>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="total-orders"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                
                <div class="widget widget-activity-four">

                    <div class="widget-heading">
                        <h5 class="">Recent Activities</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">
                                
                                <div class="item-timeline timeline-primary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p><span>Dansoman P.C</span><a href="javascript:void(0);"> processed a claim</p></a>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">Just Now</p>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>New user subscribed to <a href="javascript:void(0);">Dosh Insurance</a>  <a href="javascript:void(0);">Admin</a></p>
                                        <span class="badge badge-success">Subscribed</span>
                                        <p class="t-time">2 min ago</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-danger">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Acacia <span>declined claim request</span></p>
                                        <span class="badge badge-danger">Rejected</span>
                                        <p class="t-time">14:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>by Korle Bu hospital <a href="javascript:void(0);"></a></p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Korle Bu <a href="javascript:void(0);">user deactivated</a>.</p>
                                        <span class="badge badge-primary">deactivated</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <a href="javascript:void(0);">claim approved by Nyaho from Acacia Insurance</a>
                                        <span class="badge badge-success">approved</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send contract details to Freelancer</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">18:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Kelly want to increase the time of the project.</p>
                                        <span class="badge badge-primary">In Progress</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Server down for maintanence</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Malicious link detected</p>
                                        <span class="badge badge-warning">Block</span>
                                        <p class="t-time">20:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">23:00</p>
                                    </div>
                                </div>

                            </div>                                    
                        </div>

                        <div class="tm-action-btn">
                            <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        </div>
                    </div>
                </div>
                
            </div>
            
            {{-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing"> --}}
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><div class="th-content">Subscriber</div></th>
                                        <th><div class="th-content">Partner</div></th>
                                        <th><div class="th-content">Service Provider</div></th>
                                        <th><div class="th-content th-heading">Amount</div></th>
                                        <th><div class="th-content">Date</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar">Andy King</div></td>
                                        <td><div class="td-content product-brand">Dosh</div></td>
                                        <td><div class="td-content">Kaneshie P.C</div></td>
                                        <td><div class="td-content pricing"><span class="">₵88.00</span></div></td>
                                        <td><div class="td-content"><span class="badge "> 2/10/2021</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar">Irene Collins</div></td>
                                        <td><div class="td-content product-brand">Enterprise</div></td>
                                        <td><div class="td-content">Dansoman P.C</div></td>
                                        <td><div class="td-content pricing"><span class="">₵84.00</span></div></td>
                                        <td><div class="td-content"><span class="badge">21/9/2021</span></div></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar">Laurie Fox</div></td>
                                        <td><div class="td-content product-brand">Acacia</div></td>
                                        <td><div class="td-content">Korle Bu</div></td>
                                        <td><div class="td-content pricing"><span class="">₵126.04</span></div></td>
                                        <td><div class="td-content"><span class="badge ">11/9/2021</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="avatar">Luke Ivory</div></td>
                                        <td><div class="td-content product-brand">Liberty Health</div></td>
                                        <td><div class="td-content">Ridge Hospital</div></td>
                                        <td><div class="td-content pricing"><span class="">₵56.07</span></div></td>
                                        <td><div class="td-content"><span class="badge">1/9/2021</span></div></td>
                                    </tr>
 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing" style="position: relative; top:-177px;">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h6 class="value">₵ 45,141</h6>
                                <p class="">Expenses</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
         

            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                
                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Account Info</h5>
                    </div>

                    <div class="widget-content">
                        <div class="invoice-box">
                            
                            <div class="acc-total-info">
                                <h5>Balance</h5>
                                <p class="acc-amount">₵470</p>
                            </div>

                            <div class="inv-detail">                                        
                                <div class="info-detail-1">
                                    <p>Monthly Plan</p>
                                    <p>₵ 199.0</p>
                                </div>
                                <div class="info-detail-2">
                                    <p>Taxes</p>
                                    <p>₵ 17.82</p>
                                </div>
                                <div class="info-detail-3 info-sub">
                                    <div class="info-detail">
                                        <p>Extras this month</p>
                                        <p>₵ -0.68</p>
                                    </div>
                                    <div class="info-detail-sub">
                                        <p>Netflix Yearly Subscription</p>
                                        <p>₵ 0</p>
                                    </div>
                                    <div class="info-detail-sub">
                                        <p>Others</p>
                                        <p>₵ -0.68</p>
                                    </div>
                                </div>
                            </div>

                            <div class="inv-action">
                                <a href="" class="btn btn-dark">Summary</a>
                                <a href="" class="btn btn-danger">Transfer</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}

         

            {{-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Top Selling Product</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><div class="th-content">Product</div></th>
                                        <th><div class="th-content th-heading">Price</div></th>
                                        <th><div class="th-content th-heading">Discount</div></th>
                                        <th><div class="th-content">Sold</div></th>
                                        <th><div class="th-content">Source</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Speakers</div></td>
                                        <td><div class="td-content"><span class="pricing">₵84.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵10.00</span></div></td>
                                        <td><div class="td-content">240</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Direct</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Sunglasses</div></td>
                                        <td><div class="td-content"><span class="pricing">₵56.07</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵5.07</span></div></td>
                                        <td><div class="td-content">190</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Google</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Watch</div></td>
                                        <td><div class="td-content"><span class="pricing">₵88.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵20.00</span></div></td>
                                        <td><div class="td-content">66</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Laptop</div></td>
                                        <td><div class="td-content"><span class="pricing">₵110.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵33.00</span></div></td>
                                        <td><div class="td-content">35</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Email</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Camera</div></td>
                                        <td><div class="td-content"><span class="pricing">₵126.04</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵26.04</span></div></td>
                                        <td><div class="td-content">30</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Referral</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Shoes</div></td>
                                        <td><div class="td-content"><span class="pricing">₵108.09</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵47.09</span></div></td>
                                        <td><div class="td-content">130</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Google</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="{{asset('assets/img/90x90.jpg')}}" alt="product">Headphone</div></td>
                                        <td><div class="td-content"><span class="pricing">₵168.09</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">₵60.09</span></div></td>
                                        <td><div class="td-content">170</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
    
@endsection