@extends('Layouts.app')
@section('content')
    <div class="container-fluid bg-whithe w-75 ">
        <div class="row ">
            <div class="col-2 bg-custom-color-blue p-4 text-light rounded-4 rounded-end-0">
                <div class="row border-primary">
                    <img src="{{asset("imgenes/yopelon.jpg")}}" class="rounded-circle mx-auto d-block w-60" alt="Fotografia">
                </div>
                <div class="row p-3">
                    <h5 class="p-2">
                        <i class="fa-solid fa-user-lock"></i> My cloud</h5>
                    <h5 class="p-2">
                        <i class="fa-solid fa-users"></i> Shared files</h5>
                    <h5 class="p-2">
                        <i class="fa-solid fa-star"></i> Favorites</h5>
                    <h5 class="p-">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Upload files</h5>
                </div>
                <div class="row p-3">
                    <h5 class="p-4">
                        <i class="fa-solid fa-gear"></i> Settings</h5>
                    <h5 class="p-4">
                        <i class="fa-solid fa-right-from-bracket"></i> Log out</h5>
                </div>
            </div>
            <div class="col-7 p-2 bg-custom-color-gray">
                <input type="text"  class="form-control"  placeholder="Search..." >
                <div class="row p-5">
                    <h3>Categories</h3>
                    <div class="col-2 p-3 md-3 card text-center shadow card-body bg-custom-color-purple ">
                        <h5 class="text-light fw-bold"><i class="fa-solid fa-camera"></i> Pictures</h5>
                        <h6 class="text-light fw-bold">480 files</h6>
                    </div>
                    <div class="col-3 p-4 ms-3 card text-center shadow card-body bg-custom-color-green " >
                        <h5 class="text-light fw-bold"><i class="fa-solid fa-file-lines"></i> Documents</h5>
                        <h6 class="text-light fw-bold">190 files</h6>
                    </div>
                    <div class="col-2 p-4 ms-3 card text-center shadow card-body " style="background-color: #e35757">
                        <h5 class="text-light fw-bold"><i class="fa-solid fa-video"></i> Videos</h5>
                        <h6 class="text-light fw-bold">30 files</h6>
                    </div>
                    <div class="col-2 p-4 ms-3 card text-center shadow card-body bg-custom-color-blue">
                        <h5 class="text-light fw-bold"><i class="fa-solid fa-microphone"></i> Audio</h5>
                        <h6 class="text-light fw-bold">80 files</h6>
                    </div>
                </div>
                <div class="row p-4">
                    <h3>Files</h3>
                    <div class="col p-2 d-flex gap-2 mb-5 card p-2 shadow">
                        <button type="button" class="btn">
                            <h5 class="text-danger-emphasis fw-bold"><i class="fa-solid fa-bars"></i> Work</h5>
                        </button>
                    </div>
                    <div class="col-3 ms-2 d-flex gap-2 mb-5 card p-2 shadow">
                        <button type="button" class="btn">
                            <p class=""><h5 class="text-info fw-bold"><i class="fa-solid fa-user"></i> Personal</h5></p>
                        </button>
                    </div>
                    <div class="col ms-3 d-flex gap-3 mb-5 card p-2 shadow">
                        <button type="button" class="btn">
                            <h5 class="text-danger fw-bold"><i class="fa-solid fa-graduation-cap"></i> School</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-2 d-flex gap-3 mb-5 card p-2 shadow">
                        <button type="button" class="btn">
                            <h5 class="text-primary fw-bold"><i class="fa-solid fa-box-archive"></i> Archive</h5>
                        </button>
                    </div>
                    <div class="col-2 ms-2 d-flex gap-3 mb-5 card p-2 shadow">
                        <button type="button" class="btn">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="row p-4">
                    <h3>Recent files</h3>
                    <div class="col p-4">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"><i class="fa-solid fa-camera text-danger-emphasis"></i> IMG_100000</th>
                                <th scope="col">PNG file</th>
                                <th scope="col">5 MB</th>
                                <th scope="col"><Button type="button" class="btn">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </Button></th>
                                <th class="col">
                                    <button type="button" class="btn">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><i class="fa-solid fa-video text-danger"></i> Startup pitch</th>
                                <td>AVI filek</td>
                                <td>105 MB</td>
                                <th scope="col"><Button type="button" class="btn">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </Button></th>
                                <th class="col">
                                    <button type="button" class="btn">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fa-solid fa-microphone text-primary"></i> Freestyle beat</th>
                                <td>MP3 file</td>
                                <td>21 MB</td>
                                <th scope="col"><Button type="button" class="btn">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </Button></th>
                                <th class="col">
                                    <button type="button" class="btn">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fa-solid fa-file text-info fw-bold"></i> Work proposal</th>
                                <td scope="col">DOCx file</td>
                                <td scope="col">500 kb</td>
                                <th scope="col"><Button type="button" class="btn">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </Button></th>
                                <th class="col">
                                    <button type="button" class="btn">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3 p-4 d-flex">
                <div class="row-3 bg bg-custom-color-gray flex-grow-1">
                    <div class="border p-3 text-center ">
                        <i class="fa-solid fa-upload fa-2x text-primary"></i>
                        <p class="mt-2 text-info fw-bold">Subir archivos</p>
                    </div>
                    <div class="row-2 mt-3">
                        <h6 class="text-primary fw-bold">Almacenamiento</h6>
                        <p>75GB de 100GB usados</p>
                    </div>
                    <div class="row mt-4">
                        <h6 class="text-primary fw-bold">Carpetas Compartidas</h6>
                        <table class="table p-4">
                            <thead>
                            <tr>
                                <th scope="col">Keynote files</th>
                                <td colspan="2">Larry the Bird</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Vacation photos</th>
                                <td colspan="2">Larry the Bird</td>
                            </tr>
                            <tr>
                                <th scope="row">Project repot</th>
                                <td colspan="2">Larry the Bird</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button>
                                        <h5 class="text-center mb-1"><i class="fa-solid fa-plus"></i> Add more</h5>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
