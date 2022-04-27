@include ('admin/header')

@include ('admin/sidebar')


<div class="main-content">

                <div class="page-content">
                    <!-- start page title -->
                    <div class="page-title-box" style="background-color: #cc5500;">
                        <div class="container-fluid">
                         <div class="row align-items-center">
                             <div class="col-sm-6">
                                 <div class="page-title">
                                     <h4>Calendar</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                             <li class="breadcrumb-item active">Calendar</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="" class="btn btn-success">Add Widget</a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    
                    <div class="container-fluid">
                        <div class="page-content-wrapper">
                            <div class="row mb-4">
                                <div class="col-xl-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <button type="button" class="btn font-16 btn-primary waves-effect waves-light w-100" id="btn-new-event" data-bs-toggle="modal" data-bs-target="#event-modal">
                                                Create New Event
                                            </button>
                
                                            <div id="external-events">
                                                <br>
                                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                <div class="external-event fc-event bg-success" data-class="bg-success">
                                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event
                                                    Planning
                                                </div>
                                                <div class="external-event fc-event bg-info" data-class="bg-info">
                                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                                </div>
                                                <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating
                                                    Reports
                                                </div>
                                                <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                                                    New theme
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-xl-9">
                                    <div class="card mb-0">
                                    <div class="card-body">
                                                 <div id="calendar" class="fc fc-ltr fc-bootstrap" style="">
                                                    <div class="fc-toolbar fc-header-toolbar">
                                                        <div class="fc-left">
                                                            <div class="btn-group">
                                                                <button
                                                                    type="button"
                                                                    class="fc-prev-button btn btn-primary"
                                                                    aria-label="prev"
                                                                >
                                                                    <span class="fa fa-chevron-left"></span></button
                                                                ><button
                                                                    type="button"
                                                                    class="fc-next-button btn btn-primary"
                                                                    aria-label="next"
                                                                >
                                                                    <span class="fa fa-chevron-right"></span>
                                                                </button>
                                                            </div>
                                                            <button
                                                                type="button"
                                                                class="fc-today-button btn btn-primary"
                                                                disabled=""
                                                            >
                                                                today
                                                            </button>
                                                        </div>
                                                        <div class="fc-center"><h2>April 2022</h2></div>
                                                        <div class="fc-right">
                                                            <div class="btn-group">
                                                                <button
                                                                    type="button"
                                                                    class="fc-dayGridMonth-button btn btn-primary active"
                                                                >
                                                                    month</button
                                                                ><button
                                                                    type="button"
                                                                    class="fc-timeGridWeek-button btn btn-primary"
                                                                >
                                                                    week</button
                                                                ><button
                                                                    type="button"
                                                                    class="fc-timeGridDay-button btn btn-primary"
                                                                >
                                                                    day
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fc-view-container">
                                                        <div class="fc-view fc-dayGridMonth-view fc-dayGrid-view" style="">
                                                            <table class="table-bordered">
                                                                <thead class="fc-head">
                                                                    <tr>
                                                                        <td class="fc-head-container">
                                                                            <div class="fc-row table-bordered">
                                                                                <table class="table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th
                                                                                                class="fc-day-header fc-sun"
                                                                                            >
                                                                                                <span>Sun</span>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-day-header fc-mon"
                                                                                            >
                                                                                                <span>Mon</span>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-day-header fc-tue"
                                                                                            >
                                                                                                <span>Tue</span>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-day-header fc-wed"
                                                                                            >
                                                                                                <span>Wed</span>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-day-header fc-thu"
                                                                                            >
                                                                                                <span>Thu</span>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-day-header fc-fri"
                                                                                            >
                                                                                                <span>Fri</span>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-day-header fc-sat"
                                                                                            >
                                                                                                <span>Sat</span>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fc-body">
                                                                    <tr>
                                                                        <td class="">
                                                                            <div
                                                                                class="fc-scroller fc-day-grid-container"
                                                                                style="overflow: hidden; height: 615px"
                                                                            >
                                                                                <div class="fc-day-grid">
                                                                                    <div
                                                                                        class="fc-row fc-week table-bordered"
                                                                                        style="height: 102px"
                                                                                    >
                                                                                        <div class="fc-bg">
                                                                                            <table class="table-bordered">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day fc-sun fc-other-month fc-past"
                                                                                                            data-date="2022-03-27"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-mon fc-other-month fc-past"
                                                                                                            data-date="2022-03-28"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-tue fc-other-month fc-past"
                                                                                                            data-date="2022-03-29"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-wed fc-other-month fc-past"
                                                                                                            data-date="2022-03-30"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-thu fc-other-month fc-past"
                                                                                                            data-date="2022-03-31"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-fri fc-past"
                                                                                                            data-date="2022-04-01"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-sat fc-past"
                                                                                                            data-date="2022-04-02"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sun fc-other-month fc-past"
                                                                                                            data-date="2022-03-27"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >27</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-mon fc-other-month fc-past"
                                                                                                            data-date="2022-03-28"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >28</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-tue fc-other-month fc-past"
                                                                                                            data-date="2022-03-29"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >29</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-wed fc-other-month fc-past"
                                                                                                            data-date="2022-03-30"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >30</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-thu fc-other-month fc-past"
                                                                                                            data-date="2022-03-31"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >31</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-fri fc-past"
                                                                                                            data-date="2022-04-01"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >1</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sat fc-past"
                                                                                                            data-date="2022-04-02"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >2</span
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >12a</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >All
                                                                                                                        Day
                                                                                                                        Event</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fc-row fc-week table-bordered"
                                                                                        style="height: 102px"
                                                                                    >
                                                                                        <div class="fc-bg">
                                                                                            <table class="table-bordered">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day fc-sun fc-past"
                                                                                                            data-date="2022-04-03"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-mon fc-past"
                                                                                                            data-date="2022-04-04"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-tue fc-past"
                                                                                                            data-date="2022-04-05"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-wed fc-past"
                                                                                                            data-date="2022-04-06"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-thu fc-past"
                                                                                                            data-date="2022-04-07"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-fri fc-past"
                                                                                                            data-date="2022-04-08"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-sat fc-past"
                                                                                                            data-date="2022-04-09"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sun fc-past"
                                                                                                            data-date="2022-04-03"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >3</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-mon fc-past"
                                                                                                            data-date="2022-04-04"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >4</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-tue fc-past"
                                                                                                            data-date="2022-04-05"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >5</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-wed fc-past"
                                                                                                            data-date="2022-04-06"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >6</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-thu fc-past"
                                                                                                            data-date="2022-04-07"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >7</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-fri fc-past"
                                                                                                            data-date="2022-04-08"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >8</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sat fc-past"
                                                                                                            data-date="2022-04-09"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >9</span
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                            colspan="3"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >12a</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Long
                                                                                                                        Event</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >4p</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Repeating
                                                                                                                        Event</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fc-row fc-week table-bordered"
                                                                                        style="height: 102px"
                                                                                    >
                                                                                        <div class="fc-bg">
                                                                                            <table class="table-bordered">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day fc-sun fc-past"
                                                                                                            data-date="2022-04-10"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-mon fc-today alert alert-info"
                                                                                                            data-date="2022-04-11"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-tue fc-future"
                                                                                                            data-date="2022-04-12"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-wed fc-future"
                                                                                                            data-date="2022-04-13"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-thu fc-future"
                                                                                                            data-date="2022-04-14"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-fri fc-future"
                                                                                                            data-date="2022-04-15"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-sat fc-future"
                                                                                                            data-date="2022-04-16"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sun fc-past"
                                                                                                            data-date="2022-04-10"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >10</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-mon fc-today alert alert-info"
                                                                                                            data-date="2022-04-11"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >11</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-tue fc-future"
                                                                                                            data-date="2022-04-12"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >12</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-wed fc-future"
                                                                                                            data-date="2022-04-13"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >13</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-thu fc-future"
                                                                                                            data-date="2022-04-14"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >14</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-fri fc-future"
                                                                                                            data-date="2022-04-15"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >15</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sat fc-future"
                                                                                                            data-date="2022-04-16"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >16</span
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >10:30a</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Meeting</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                            rowspan="2"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >7p</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Birthday
                                                                                                                        Party</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                            rowspan="2"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >4p</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Repeating
                                                                                                                        Event</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            rowspan="2"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >12p</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Lunch</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fc-row fc-week table-bordered"
                                                                                        style="height: 102px"
                                                                                    >
                                                                                        <div class="fc-bg">
                                                                                            <table class="table-bordered">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day fc-sun fc-future"
                                                                                                            data-date="2022-04-17"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-mon fc-future"
                                                                                                            data-date="2022-04-18"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-tue fc-future"
                                                                                                            data-date="2022-04-19"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-wed fc-future"
                                                                                                            data-date="2022-04-20"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-thu fc-future"
                                                                                                            data-date="2022-04-21"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-fri fc-future"
                                                                                                            data-date="2022-04-22"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-sat fc-future"
                                                                                                            data-date="2022-04-23"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sun fc-future"
                                                                                                            data-date="2022-04-17"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >17</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-mon fc-future"
                                                                                                            data-date="2022-04-18"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >18</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-tue fc-future"
                                                                                                            data-date="2022-04-19"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >19</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-wed fc-future"
                                                                                                            data-date="2022-04-20"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >20</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-thu fc-future"
                                                                                                            data-date="2022-04-21"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >21</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-fri fc-future"
                                                                                                            data-date="2022-04-22"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >22</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sat fc-future"
                                                                                                            data-date="2022-04-23"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >23</span
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fc-row fc-week table-bordered"
                                                                                        style="height: 102px"
                                                                                    >
                                                                                        <div class="fc-bg">
                                                                                            <table class="table-bordered">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day fc-sun fc-future"
                                                                                                            data-date="2022-04-24"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-mon fc-future"
                                                                                                            data-date="2022-04-25"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-tue fc-future"
                                                                                                            data-date="2022-04-26"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-wed fc-future"
                                                                                                            data-date="2022-04-27"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-thu fc-future"
                                                                                                            data-date="2022-04-28"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-fri fc-future"
                                                                                                            data-date="2022-04-29"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-sat fc-future"
                                                                                                            data-date="2022-04-30"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sun fc-future"
                                                                                                            data-date="2022-04-24"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >24</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-mon fc-future"
                                                                                                            data-date="2022-04-25"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >25</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-tue fc-future"
                                                                                                            data-date="2022-04-26"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >26</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-wed fc-future"
                                                                                                            data-date="2022-04-27"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >27</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-thu fc-future"
                                                                                                            data-date="2022-04-28"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >28</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-fri fc-future"
                                                                                                            data-date="2022-04-29"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >29</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sat fc-future"
                                                                                                            data-date="2022-04-30"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >30</span
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td
                                                                                                            class="fc-event-container"
                                                                                                        >
                                                                                                            <a
                                                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-dark fc-draggable"
                                                                                                                href="http://google.com/"
                                                                                                                ><div
                                                                                                                    class="fc-content"
                                                                                                                >
                                                                                                                    <span
                                                                                                                        class="fc-time"
                                                                                                                        >12a</span
                                                                                                                    >
                                                                                                                    <span
                                                                                                                        class="fc-title"
                                                                                                                        >Click
                                                                                                                        for
                                                                                                                        Google</span
                                                                                                                    >
                                                                                                                </div></a
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fc-row fc-week table-bordered"
                                                                                        style="height: 105px"
                                                                                    >
                                                                                        <div class="fc-bg">
                                                                                            <table class="table-bordered">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day fc-sun fc-other-month fc-future"
                                                                                                            data-date="2022-05-01"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-mon fc-other-month fc-future"
                                                                                                            data-date="2022-05-02"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-tue fc-other-month fc-future"
                                                                                                            data-date="2022-05-03"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-wed fc-other-month fc-future"
                                                                                                            data-date="2022-05-04"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-thu fc-other-month fc-future"
                                                                                                            data-date="2022-05-05"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-fri fc-other-month fc-future"
                                                                                                            data-date="2022-05-06"
                                                                                                        ></td>
                                                                                                        <td
                                                                                                            class="fc-day fc-sat fc-other-month fc-future"
                                                                                                            data-date="2022-05-07"
                                                                                                        ></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="fc-content-skeleton">
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sun fc-other-month fc-future"
                                                                                                            data-date="2022-05-01"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >1</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-mon fc-other-month fc-future"
                                                                                                            data-date="2022-05-02"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >2</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-tue fc-other-month fc-future"
                                                                                                            data-date="2022-05-03"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >3</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-wed fc-other-month fc-future"
                                                                                                            data-date="2022-05-04"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >4</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-thu fc-other-month fc-future"
                                                                                                            data-date="2022-05-05"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >5</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-fri fc-other-month fc-future"
                                                                                                            data-date="2022-05-06"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >6</span
                                                                                                            >
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="fc-day-top fc-sat fc-other-month fc-future"
                                                                                                            data-date="2022-05-07"
                                                                                                        >
                                                                                                            <span
                                                                                                                class="fc-day-number"
                                                                                                                >7</span
                                                                                                            >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
                            <div style="clear:both"></div>
                
                            <!-- Add New Event MODAL -->
                            <div class="modal fade" id="event-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="display: none;" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header py-3 px-4">
                                            <h5 class="modal-title" id="modal-title">Add Event</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                
                                        <div class="modal-body p-4">
                                            <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Event Name</label>
                                                            <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required="" value="">
                                                            <div class="invalid-feedback" wfd-invisible="true">Please provide a valid event name
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col-->
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Category</label>
                                                            <select class="form-select" name="category" id="event-category">
                                                                <option selected=""> --Select-- </option>
                                                                <option value="bg-danger">Danger</option>
                                                                <option value="bg-success">Success</option>
                                                                <option value="bg-primary">Primary</option>
                                                                <option value="bg-info">Info</option>
                                                                <option value="bg-dark">Dark</option>
                                                                <option value="bg-warning">Warning</option>
                                                            </select>
                                                            <div class="invalid-feedback" wfd-invisible="true">Please select a valid event
                                                                category</div>
                                                        </div>
                                                    </div> <!-- end col-->
                                                </div> <!-- end row-->
                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                    </div> <!-- end col-->
                                                    <div class="col-6 text-end">
                                                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                    </div> <!-- end col-->
                                                </div> <!-- end row-->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end modal-content-->
                                </div>
                                <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->

                        </div>
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

              
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script wfd-invisible="true">document.write(new Date().getFullYear())</script>2022 © Morvin.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            @include ('admin/script')

            </body>
</html>