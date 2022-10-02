<x-app-layout>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">REGISTRO PRINCIPAL DE HECHOS DELICTIVOS</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            {{-- estaba con un lg:col-span-6 --}}
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <h3 class="text-lg font-medium mr-auto">Detalles</h3>
                <div class="form-inline mt-3">
                    <label for="crud-form-1" class="form-label">Departamento</label>
                    <select data-placeholder="Seleccione un departamento" class="tom-select w-full">
                        <option value="1">Lima</option>
                        <option value="2">Arequipa</option>
                        <option value="3">Lima</option>
                        <option value="4">Puno</option>
                        <option value="5">Apurimac</option>
                    </select>
                </div>
                <div class="form-inline mt-3">
                    <label for="crud-form-2" class="form-label">Distrito</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2">
                        <option value="1" selected>San Miguel</option>
                        <option value="2">San Borja</option>
                        <option value="3" selected>La Molina</option>
                        <option value="4">Ate</option>
                    </select>
                </div>
                <div class="form-inline mt-3">
                    <label for="crud-form-3" class="form-label">Direccion</label>
                    <input id="regular-form-1" type="text" class="form-control"
                        placeholder="Especifique una dirección">
                </div>
                <div class="form-inline mt-3">
                    <label for="crud-form-3" class="form-label">Fecha</label>
                    <input type="text" class="datepicker form-control w-56 block mx-auto" data-single-mode="true">
                </div>
                <div class="form-inline mt-3">
                    <label for="crud-form-3" class="form-label">Delitos/incidentes</label>
                    <select data-placeholder="Select your favorite actors" data-header="Actors"
                        class="tom-select w-full" multiple>
                        <option value="1">Leonardo DiCaprio</option>
                        <option value="2" selected>Johnny Deep</option>
                        <option value="3" selected>Robert Downey, Jr</option>
                        <option value="4">Samuel L. Jackson</option>
                        <option value="5" selected>Morgan Freeman</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>Descripcion</label>
                    <div class="mt-2">
                        <div class="editor">
                        </div>
                    </div>
                </div>
                {{-- Seccion agregar sospechosos a traves de un tabulador --}}
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">Tabulator</h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
                        <div class="dropdown ml-auto sm:ml-0">
                            <button class="dropdown-toggle btn px-2 box" aria-expanded="false"
                                data-tw-toggle="dropdown">
                                <span class="w-5 h-5 flex items-center justify-center">
                                    <i class="w-4 h-4" data-lucide="plus"></i>
                                </span>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="file-plus" class="w-4 h-4 mr-2"></i> New Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="users" class="w-4 h-4 mr-2"></i> New Group
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN: HTML Table Data -->
                <div class="intro-y box p-5 mt-5">
                    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                            <div class="sm:flex items-center sm:mr-4">
                                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                                <select id="tabulator-html-filter-field"
                                    class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                    <option value="name">Name</option>
                                    <option value="category">Category</option>
                                    <option value="remaining_stock">Remaining Stock</option>
                                </select>
                            </div>
                            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                                <select id="tabulator-html-filter-type"
                                    class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                                    <option value="like" selected>like</option>
                                    <option value="=">=</option>
                                    <option value="<">&lt;</option>
                                    <option value="<=">&lt;=</option>
                                    <option value=">">></option>
                                    <option value=">=">>=</option>
                                    <option value="!=">!=</option>
                                </select>
                            </div>
                            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                                <input id="tabulator-html-filter-value" type="text"
                                    class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                            </div>
                            <div class="mt-2 xl:mt-0">
                                <button id="tabulator-html-filter-go" type="button"
                                    class="btn btn-primary w-full sm:w-16">Go</button>
                                <button id="tabulator-html-filter-reset" type="button"
                                    class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
                            </div>
                        </form>
                        <div class="flex mt-5 sm:mt-0">
                            <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
                                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                            </button>
                            <div class="dropdown w-1/2 sm:w-auto">
                                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto"
                                    aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i
                                        data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                                            </a>
                                        </li>
                                        <li>
                                            <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                                            </a>
                                        </li>
                                        <li>
                                            <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                            </a>
                                        </li>
                                        <li>
                                            <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto scrollbar-hidden">
                        <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
                    </div>
                </div>
                {{-- END: Seccion de tabulador --}}

                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
    @vite('resources/js/ckeditor-classic.js')

</x-app-layout>
