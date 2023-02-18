@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="metrics">
                            <div class="metric">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px"  viewBox="0 0 24 24"><g>
                                    <path d="M17.438,21.937H6.562c-1.378,0-2.5-1.122-2.5-2.5v-0.827c0-3.969,3.561-7.198,7.938-7.198
                                        s7.938,3.229,7.938,7.198v0.827C19.938,20.815,18.817,21.937,17.438,21.937z M12,12.412c-3.826,0-6.938,2.78-6.938,6.198v0.827
                                        c0,0.827,0.673,1.5,1.5,1.5h10.877c0.827,0,1.5-0.673,1.5-1.5v-0.827C18.938,15.192,15.826,12.412,12,12.412z"/>
                                    <path d="M12,9.911c-2.164,0-3.923-1.76-3.923-3.924S9.836,2.063,12,2.063s3.923,1.76,3.923,3.923
                                        S14.164,9.911,12,9.911z M12,3.063c-1.612,0-2.923,1.312-2.923,2.923c0,1.612,1.312,2.924,2.923,2.924s2.923-1.312,2.923-2.924
                                        C14.923,4.375,13.612,3.063,12,3.063z"/>
                                </g>
                                </svg>
                                <div class="metric-title">Total Students</div>
                                <div class="metric-value">500</div>
                            </div>

                            <div class="metric">
                                <img src="teacher-icon.svg" width="32px" height="32px" alt="">

                                <div class="metric-title">Total Teachers</div>
                                <div class="metric-value">50</div>
                            </div>

                            <div class="metric">
                                <img src="school-building-svgrepo-com.svg"width="32px" height="32px" alt="">
                        

                                <div class="metric-title">Total Classes</div>
                                <div class="metric-value">20</div>

                            </div>

                            <div class="metric">
                                <img src="register-svgrepo-com.svg"width="32px" height="32px" alt="">
                                <div class="metric-title">Attendance Rate</div>
                                <div class="metric-value">85%</div>
                            </div>

                            <div class="metric">
                                <img src="studying-exam-svgrepo-com.svg" width="32px" height="32px" alt="">
                                <div class="metric-title">Exams Passed</div>
                                <div class="metric-value">80%</div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>HEADTEACHER REMARKS</h2>
    <p

@endsection
