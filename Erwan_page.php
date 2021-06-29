

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            
        </title>
		<!--<link rel="icon" type="image/x-icon" href="http://prospero.amo-it-proto.com/media_site/favicon/favicon.ico"/>-->
        <!-- css -->
        <!--<link rel="stylesheet" type="text/css" href="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />-->
        <link rel="stylesheet" type="text/css" href="http://prospero.amo-it-proto.com/media_site/components/w2ui/w2ui.css" />
        <link rel="stylesheet" href="http://prospero.amo-it-proto.com/media_site/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://prospero.amo-it-proto.com/media_site/components/jqueryui/jquery-ui.css">

        <link rel="stylesheet" href="http://prospero.amo-it-proto.com/media_site/components/tool_dropzone.css">
        <!--<link rel="stylesheet" href="http://prospero.amo-it-proto.com/media_site/assets/css/prospero.css">-->
        <link rel="stylesheet" href="/assets/css/prospero.css">

        <link rel="stylesheet" href="http://prospero.amo-it-proto.com/media_site/components/style.css?1">
        <!-- javascript -->
        <script src="http://prospero.amo-it-proto.com/media_site/components/jquery/jquery-1.9.1.js"></script>

        <!--<script type="text/javascript" src="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>-->
        <script type="text/javascript" src="http://prospero.amo-it-proto.com/media_site/components/w2ui/w2ui.min.js"></script>

        <script src="http://prospero.amo-it-proto.com/media_site/components/jqueryui/jquery-ui.js"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/assets/js/bootstrap.bundle.min.js"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/underscore.js"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/tool_dropzone.js?1"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/Prospero.js?1"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/PModal.js?1"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/PProjectView.js?1"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/PWidgets.js?1"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/PLayout.js?1"></script>
        <script src="http://prospero.amo-it-proto.com/media_site/components/UrlUtils.js?1"></script>
        <script>
            var prospero = new Prospero();
            var urls = new UrlUtils();
        </script>
    </head>
    <body>
        <div class="modal fade import-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body txt_l">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Import files among the following extensions :
                        </p>
                        <p>
                            dic, col, fic, cat, txt, zip
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="dropzone-panel" style="width:100%; height: 200px; border: 1px solid black;"></div>
                        <div class="spinner-panel hidden" style="display: flex;">
                            <div style="margin: auto;" class="spinner-border" role="status"></div>
                        </div>
                    </div>
                    <div class="alert alert-warning error-feedback-pane hidden" role="alert">
                        <p>
                            Import fails for the following reason :
                        </p>
                        <p class="error-txt">
                            Error message
                        </p>
                    </div>
                    <div class="col-12">
                        <p class="txt-corpus"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-primary">Yes</button>-->
                <button type="button" class="btn btn-secondary close-button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        <div class="modal fade approval-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body txt_l approval-text">
                Do you really want to delete this text ?
            </div>
            <div class="modal-footer">
                <button action-name="yes" type="button" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">no</button>
            </div>
        </div>
    </div>
</div>
        <div class="modal fade new-text-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create text</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body txt_l">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Choose the text creation way :
                        </p>
                    </div>
                    <div class="col-12 text-creation-choice">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="textarea" id="text-creation-choice-1" checked>
                            <label class="form-check-label" for="text-creation-choice-1">
                                From text value
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="file" id="text-creation-choice-2">
                            <label class="form-check-label" for="text-creation-choice-2">
                                From file (txt or pdf)
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-creation-input">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Put your text here" id="text-creation-input-1"></textarea>
                            <label for="text-creation-input-1">Put your text here</label>
                        </div>
                    </div>
                    <div class="col-12 text-creation-dropezone hidden">
                        <div class="dropzone-panel" style="width:100%; height: 200px; border: 1px solid black;"></div>
                        <div class="spinner-panel hidden" style="display: flex;">
                            <div style="margin: auto;" class="spinner-border" role="status"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="txt-corpus"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" action-name="create">Create</button>
                <button type="button" class="btn btn-secondary close-button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        <div class="modal fade new-corpus-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create corpus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body txt_l">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 corpus-name-input">
                            <label for="new-corpus-name" class="form-label">Corpus name</label>
                            <input type="text" class="form-control" id="new-corpus-name" placeholder="..." aria-describedby="new-corpus-name-feedback">
                            <div id="new-corpus-name-feedback" class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button action-name="create" type="button" class="btn btn-primary">Create</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        <div class="modal fade export-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Export ...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body txt_l">
                <div class="row">
                    <div class="col-12 items-export-type">
                        <select class="form-select" aria-label="">
                            <option value="P1" selected>Export as P1 zip file</option>
                            <option value="JSON">Export as Json file</option>
                        </select>
                    </div>
                    <div class="col-12 items-export-choice">
                        <p>
                            Items to export :
                        </p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="entireProject" id="items-export-choice-1" checked>
                            <label class="form-check-label" for="items-export-choice-1">
                                Entire project
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="onlySelectedDictionaries" id="items-export-choice-2">
                            <label class="form-check-label" for="items-export-choice-2">
                                Only selected dictionaries
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="onlyCorpusTexts" id="items-export-choice-3">
                            <label class="form-check-label" for="items-export-choice-3">
                                Only texts of selected corpus
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="onlySelectedTexts" id="items-export-choice-4">
                            <label class="form-check-label" for="items-export-choice-4">
                                Only selected texts
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="spinner-panel hidden" style="display: flex;">
                            <div style="margin: auto;" class="spinner-border" role="status"></div>
                        </div>
                    </div>
                    <div class="alert alert-warning error-feedback-pane hidden" role="alert">
                        <p>
                            Export fails for the following reason :
                        </p>
                        <p class="error-txt">
                            Error message
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button action-name="export" type="button" class="btn btn-primary">Export</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        <main>
            <section class="side_container">
                <header class="side_header ">
    <img src="http://prospero.amo-it-proto.com/media_site/assets/images/prospero_logo.svg" class="logo">
</header>
<div class="nav side_nav">
    <a href="projects_mosaic.php" class="side_nav_link active">
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.5 28.5">
            <g id="icon_Accueil" data-name="icon Accueil">
                <g id="Groupe_247" data-name="Groupe 247">
                    <g id="Rectangle_150" data-name="Rectangle 150">
                        <path class="cls-1"
                            d="M10.75,13.5h-8A2.75,2.75,0,0,1,0,10.75v-8A2.75,2.75,0,0,1,2.75,0h8A2.75,2.75,0,0,1,13.5,2.75v8A2.75,2.75,0,0,1,10.75,13.5Zm-8-12A1.25,1.25,0,0,0,1.5,2.75v8A1.25,1.25,0,0,0,2.75,12h8A1.25,1.25,0,0,0,12,10.75v-8A1.25,1.25,0,0,0,10.75,1.5Z" />
                    </g>
                    <g id="Rectangle_150-2" data-name="Rectangle 150-2">
                        <path class="cls-1"
                            d="M25.75,13.5h-8A2.75,2.75,0,0,1,15,10.75v-8A2.75,2.75,0,0,1,17.75,0h8A2.75,2.75,0,0,1,28.5,2.75v8A2.75,2.75,0,0,1,25.75,13.5Zm-8-12A1.25,1.25,0,0,0,16.5,2.75v8A1.25,1.25,0,0,0,17.75,12h8A1.25,1.25,0,0,0,27,10.75v-8A1.25,1.25,0,0,0,25.75,1.5Z" />
                    </g>
                    <g id="Rectangle_150-3" data-name="Rectangle 150-3">
                        <path class="cls-1"
                            d="M10.75,28.5h-8A2.75,2.75,0,0,1,0,25.75v-8A2.75,2.75,0,0,1,2.75,15h8a2.75,2.75,0,0,1,2.75,2.75v8A2.75,2.75,0,0,1,10.75,28.5Zm-8-12A1.25,1.25,0,0,0,1.5,17.75v8A1.25,1.25,0,0,0,2.75,27h8A1.25,1.25,0,0,0,12,25.75v-8a1.25,1.25,0,0,0-1.25-1.25Z" />
                    </g>
                    <g id="Rectangle_150-4" data-name="Rectangle 150-4">
                        <path class="cls-1"
                            d="M25.75,28.5h-8A2.75,2.75,0,0,1,15,25.75v-8A2.75,2.75,0,0,1,17.75,15h8a2.75,2.75,0,0,1,2.75,2.75v8A2.75,2.75,0,0,1,25.75,28.5Zm-8-12a1.25,1.25,0,0,0-1.25,1.25v8A1.25,1.25,0,0,0,17.75,27h8A1.25,1.25,0,0,0,27,25.75v-8a1.25,1.25,0,0,0-1.25-1.25Z" />
                    </g>
                </g>
            </g>
        </svg>
    </a>
    <a href="project.php" class="side_nav_link ">
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.4 26.15">
            <g id="icon_corpora_dictionaries" data-name="icon corpora dictionaries">
                <g id="Groupe_269" data-name="Groupe 269">
                    <g id="Groupe_267" data-name="Groupe 267">
                        <g id="Tracé_73" data-name="Tracé 73">
                            <path class="cls-1"
                                d="M16.25,26.14A.37.37,0,0,1,16,26a.68.68,0,0,1-.4-.6v-17a.55.55,0,0,1,.3-.5A20.11,20.11,0,0,1,27.65,4a.67.67,0,0,1,.7.6v17c0,.2-.1.3-.2.5a.76.76,0,0,1-.5.2h0a18.22,18.22,0,0,0-11,3.7A.6.6,0,0,1,16.25,26.14Zm.6-17.3v15.4A19.15,19.15,0,0,1,27,21V5.44A18.53,18.53,0,0,0,16.85,8.84Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                        <g id="Rectangle_172" data-name="Rectangle 172">
                            <path class="cls-1"
                                d="M16.25,26.14h-4.2c-.4,0-.6-.3-.6-.7v-17a.58.58,0,0,1,.6-.6h4.2a.67.67,0,0,1,.7.6v17A.84.84,0,0,1,16.25,26.14Zm-3.5-1.3h2.9V9.24h-2.9Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                        <g id="Tracé_74" data-name="Tracé 74">
                            <path class="cls-1"
                                d="M12.05,26.14a.6.6,0,0,1-.4-.1,18,18,0,0,0-11-3.7h0c-.2,0-.3-.1-.5-.2s-.2-.3-.2-.5V4.74c0-.4.3-.6.7-.6A20.11,20.11,0,0,1,12.45,8a.55.55,0,0,1,.3.5v17a.62.62,0,0,1-.4.6ZM1.25,21a19.15,19.15,0,0,1,10.1,3.2V8.84a18,18,0,0,0-10.1-3.4Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                    </g>
                    <g id="Groupe_268" data-name="Groupe 268">
                        <g id="Tracé_75" data-name="Tracé 75">
                            <path class="cls-1"
                                d="M15.18,9.15a.76.76,0,0,1-.4-.1h0a.55.55,0,0,1-.3-.5.75.75,0,0,1,.1-.5,20.11,20.11,0,0,1,10.7-6.4.75.75,0,0,1,.5.1c.2.1.2.3.2.5a.56.56,0,0,1-.5.6,18.82,18.82,0,0,0-10,6C15.58,9.15,15.38,9.15,15.18,9.15Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                        <g id="Tracé_76" data-name="Tracé 76">
                            <path class="cls-1"
                                d="M14.18,9.15h0a.71.71,0,0,1-.6-.3.37.37,0,0,1-.1-.3.37.37,0,0,1,.1-.3A19.72,19.72,0,0,1,23,.05a.47.47,0,0,1,.6.1.55.55,0,0,1,.3.5.68.68,0,0,1-.4.6,18.38,18.38,0,0,0-8.7,7.6A.71.71,0,0,1,14.18,9.15Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                        <g id="Tracé_77" data-name="Tracé 77">
                            <path class="cls-1"
                                d="M13.08,9.15a.76.76,0,0,1-.5-.2,18.82,18.82,0,0,0-10-6c-.2,0-.4-.3-.4-.6a.76.76,0,0,1,.2-.5.44.44,0,0,1,.5-.1,19.4,19.4,0,0,1,10.7,6.4.76.76,0,0,1,.2.5.52.52,0,0,1-.2.4A.9.9,0,0,1,13.08,9.15Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                        <g id="Tracé_78" data-name="Tracé 78">
                            <path class="cls-1"
                                d="M14.18,9.15a.86.86,0,0,1-.6-.3,18.16,18.16,0,0,0-8.8-7.6.68.68,0,0,1-.4-.6.55.55,0,0,1,.3-.5,1.27,1.27,0,0,1,.6-.1,19.27,19.27,0,0,1,9.4,8.2.37.37,0,0,1,.1.3.56.56,0,0,1-.5.6Z"
                                transform="translate(0.05 0.02)" />
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </a>
    <a href="#" class="side_nav_link ">
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.85 30.86">
            <g id="icon_dashboard" data-name="icon dashboard">
                <g id="Groupe_279" data-name="Groupe 279">
                    <path id="Tracé_92" data-name="Tracé 92" class="cls-1"
                        d="M30.18.71h0l0,0a1.82,1.82,0,0,0-.56-.35A4.84,4.84,0,0,0,27.71,0h0A15.83,15.83,0,0,0,21.3,1.59,27.94,27.94,0,0,0,13.07,7.4c-1,1-1.91,2-2.67,2.84a8.73,8.73,0,0,0-7.52,2.53L1.1,14.55c-.62.63-1.31,1.45-1,2.27.33,1,1.66,1.16,3.51,1.4l1.74.26a3.78,3.78,0,0,0,.41,1.78A3.88,3.88,0,0,0,4.68,21C3.34,22.35,1.26,26.62,3,28.35A2.56,2.56,0,0,0,4.85,29a9.42,9.42,0,0,0,5.48-2.34,4,4,0,0,0,.86-1.28,3.67,3.67,0,0,0,1.14.18h.08c.1.6.18,1.2.26,1.74.25,1.84.43,3.17,1.4,3.5a1.21,1.21,0,0,0,.38.06,3.05,3.05,0,0,0,1.88-1.09L18.1,28a8.67,8.67,0,0,0,2.54-7.47c.86-.76,1.81-1.65,2.84-2.68A25.86,25.86,0,0,0,30.2,7.15C31.09,4.21,31.08,1.63,30.18.71Zm-2.5.64a4.44,4.44,0,0,1,1.09.11,1.11,1.11,0,0,1,.45.19c.35.37.62,2.68-.65,6.12a8.38,8.38,0,0,1-3.06-1.95A7.64,7.64,0,0,1,23.4,2.19a13.56,13.56,0,0,1,4.27-.84Zm-26.32,15a2.85,2.85,0,0,1,.69-.89l1.77-1.77a7.39,7.39,0,0,1,5.5-2.22,29.64,29.64,0,0,0-2.83,3.86,7.49,7.49,0,0,0-.93,1.8c-.64-.12-1.25-.2-1.81-.27a8.87,8.87,0,0,1-2.39-.51Zm6,7.62h0c0-.31.41-1.59,3-4.14s3.93-3.21,4.46-3.28c-.07.52-.88,2-3.29,4.45-2.83,2.82-3.92,3-4.12,3Zm2,1.71c-1.21,1.21-4.58,2.55-5.44,1.68S4.42,23.16,5.62,22a2.63,2.63,0,0,1,.84-.56l.38.46c-.94,1.42-1.1,2.46-.46,3.1a1.35,1.35,0,0,0,1,.39,4.24,4.24,0,0,0,2.17-.88l.44.32a2.76,2.76,0,0,1-.6.93Zm7.77,1.34-1.77,1.77a2.81,2.81,0,0,1-.88.69,8.93,8.93,0,0,1-.5-2.39c-.08-.56-.16-1.16-.27-1.8a7.35,7.35,0,0,0,1.81-.92,28.57,28.57,0,0,0,3.84-2.8,7.39,7.39,0,0,1-2.23,5.45ZM22.53,16.9a41.66,41.66,0,0,1-7.67,6.34l0,0c-1.88,1.27-3,1.15-4.16.35.55-.46,1.14-1,1.78-1.64,1.82-1.82,4.67-5.07,3.35-6.4a1.27,1.27,0,0,0-.92-.35c-.82,0-2.44.64-5.5,3.67-.66.67-1.23,1.28-1.69,1.85-1.22-1.43-1.47-2.58,0-4.66l0-.05A42,42,0,0,1,14,8.34a26.59,26.59,0,0,1,8.11-5.66,9.24,9.24,0,0,0,2.43,4.1A9.6,9.6,0,0,0,28.07,9a26,26,0,0,1-5.54,7.88Z"
                        transform="translate(-0.01 -0.01)" />
                    <path id="Tracé_93" data-name="Tracé 93" class="cls-1"
                        d="M22.68,13.19l.05-.06.06-.07,0-.06.06-.09,0-.06a.35.35,0,0,0,.05-.08l0-.06.05-.1,0-.06,0-.1,0,0s0-.07,0-.1l0-.05,0-.11v0a.56.56,0,0,0,0-.12,0,0,0,0,1,0,0,1,1,0,0,0,0-.14h0a3.56,3.56,0,0,0-.92-3.36h0a3.51,3.51,0,0,0-4.16-.65,3.56,3.56,0,0,0,1,6.66,3.5,3.5,0,0,0,3.19-1h0s0,0,0-.05l.07-.08.05-.05Zm-1.19-.68a2.21,2.21,0,0,1-2,.61h0l-.09,0a2.22,2.22,0,0,1-1-3.71h0A1.92,1.92,0,0,1,18.89,9a2.07,2.07,0,0,1,1-.25,2.13,2.13,0,0,1,1.56.65,2.19,2.19,0,0,1,.33,2.71,2.59,2.59,0,0,1-.32.42Z"
                        transform="translate(-0.01 -0.01)" />
                </g>
            </g>
        </svg>
    </a>
    <a href="#" class="side_nav_link ">
        <svg id="Parametre" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.48 30.27">
            <path id="Tracé_94" data-name="Tracé 94" class="cls-1"
                d="M17.64,30.27h-5.8a1.35,1.35,0,0,1-1.34-1.16L10,25.63a11.78,11.78,0,0,1-2-1.15L4.75,25.8a1.37,1.37,0,0,1-1.68-.6l-2.88-5a1.36,1.36,0,0,1,.32-1.74L3.3,16.28c0-.43-.06-.8-.06-1.15A10.88,10.88,0,0,1,3.3,14L.51,11.82a1.36,1.36,0,0,1-.32-1.75l2.9-5a1.32,1.32,0,0,1,1.66-.59L8,5.79a11.31,11.31,0,0,1,2-1.15l.5-3.49A1.34,1.34,0,0,1,11.84,0h5.8A1.35,1.35,0,0,1,19,1.16l.5,3.48a11.78,11.78,0,0,1,2,1.15l3.28-1.32a1.35,1.35,0,0,1,1.67.6l2.9,5A1.36,1.36,0,0,1,29,11.81L26.19,14a11,11,0,0,1,0,2.29L29,18.45a1.37,1.37,0,0,1,.34,1.73l-2.91,5a1.33,1.33,0,0,1-1.66.59l-3.29-1.32a11.78,11.78,0,0,1-2,1.15L19,29.12A1.35,1.35,0,0,1,17.64,30.27ZM8.13,23.13a.59.59,0,0,1,.38.14,10.2,10.2,0,0,0,2.31,1.33.62.62,0,0,1,.38.49l.55,3.85,5.89.06.64-3.91a.62.62,0,0,1,.38-.49A10.63,10.63,0,0,0,21,23.26a.63.63,0,0,1,.62-.08l3.61,1.45,3-5.07a.11.11,0,0,0,0-.12l-3.06-2.39a.64.64,0,0,1-.23-.58,11.9,11.9,0,0,0,.1-1.34,11.9,11.9,0,0,0-.1-1.34.64.64,0,0,1,.23-.58l3.07-2.39a.11.11,0,0,0,0-.12l-2.9-5-3.71,1.4A.65.65,0,0,1,21,7a9.87,9.87,0,0,0-2.31-1.34.65.65,0,0,1-.39-.5l-.55-3.84-5.88-.07L11.2,5.17a.63.63,0,0,1-.39.5A10.17,10.17,0,0,0,8.51,7a.65.65,0,0,1-.62.08L4.28,5.64l-3,5.07,3.08,2.51a.62.62,0,0,1,.23.57,12.08,12.08,0,0,0-.1,1.34,12.26,12.26,0,0,0,.1,1.35.62.62,0,0,1-.23.57L1.29,19.44a.12.12,0,0,0,0,.13l2.9,5,3.71-1.4A.64.64,0,0,1,8.13,23.13Zm6.61-1.69a6.31,6.31,0,1,1,6.31-6.31h0a6.32,6.32,0,0,1-6.31,6.31Zm0-11.35a5,5,0,1,0,5,5,5,5,0,0,0-5-5Z"
                transform="translate(0 0)" />
        </svg>
    </a>
</div>
            </section>
            <section class="main_container">
                <header class="main_header ">
    <div class="main_header_left">
        <div class="search_container">
            <form class="search_form">
                <input class="search_input txt_15" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn" type="submit">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 589 520" style="enable-background:new 0 0 589 520;" xml:space="preserve">
                        <g>
                            <path d="M248.9,360.7c-76.4,0-138.5-62.1-138.5-138.5c0-76.4,62.1-138.5,138.5-138.5c76.4,0,138.5,62.1,138.5,138.5
                                C387.4,298.6,325.3,360.7,248.9,360.7z M248.9,133.7c-48.8,0-88.5,39.7-88.5,88.5c0,48.8,39.7,88.5,88.5,88.5s88.5-39.7,88.5-88.5
                                C337.4,173.4,297.7,133.7,248.9,133.7z" />
                        </g>
                        <g>
                            <rect x="318" y="329" transform="matrix(0.7071 0.7071 -0.7071 0.7071 364.9628 -167.3577)"
                                width="133" height="55.7" />
                        </g>
                    </svg>
                </button>
            </form>
        </div>
        <div class="navbar_container">
            <div class="navbar_line">
                <span class="label ">View :</span>
                <a class="view_item active" href="projects_mosaic.php">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 520 520"
                        style="enable-background:new 0 0 520 520;" xml:space="preserve">
                        <g>
                            <rect width="227.6" height="227.6" />
                        </g>
                        <g>
                            <rect x="292.4" width="227.6" height="227.6" />
                        </g>
                        <g>
                            <rect y="292.4" width="227.6" height="227.6" />
                        </g>
                        <g>
                            <rect x="292.4" y="292.4" width="227.6" height="227.6" />
                        </g>
                    </svg>
                </a>
                <a class="view_item" href="projects_list.php">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 589 520"
                        style="enable-background:new 0 0 589 520;" xml:space="preserve">
                        <g>
                            <rect width="589" height="65.9" />
                        </g>
                        <g>
                            <rect y="113.5" width="589" height="65.9" />
                        </g>
                        <g>
                            <rect y="227" width="589" height="65.9" />
                        </g>
                        <g>
                            <rect y="340.6" width="589" height="65.9" />
                        </g>
                        <g>
                            <rect y="454.1" width="589" height="65.9" />
                        </g>
                    </svg>
                </a>
                <a class="view_item" href="#">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 520 520"
                        style="enable-background:new 0 0 520 520;" xml:space="preserve">
                        <circle cx="266.2" cy="254.4" r="116.3" />
                        <g>
                            <circle cx="442.5" cy="72.5" r="72.5" />
                            <circle cx="90" cy="72.5" r="72.5" />
                            <circle cx="442.5" cy="436.3" r="72.5" />
                            <circle cx="90" cy="436.3" r="72.5" />
                        </g>
                        <rect x="45.8" y="239.5" transform="matrix(0.7071 0.7071 -0.7071 0.7071 257.8675 -113.7435)"
                            width="440.9" height="29.7" />
                        <rect x="45.8" y="239.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -101.911 262.7687)"
                            width="440.9" height="29.7" />
                    </svg>
                </a>
                <div class="separator"></div>
                <span class="label ">Sort by :</span>
                <a class="sort_item active" href="#">
                <span class="pin"></span>
                Title
                </a>
                <a class="sort_item" href="#">
                <span class="pin"></span>
                Date
                </a>
                <div class="separator"></div>
                <div action-name="multi-actions" class="btn-group state-button">
                  <button type="button" class="btn btn-primary new-item-button state-button-state">
                      Import
                  </button>
                  <button type="button" class="btn btn-primary new-item-button dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Import</a></li>
                    <li><a class="dropdown-item" href="#">Export</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main_header_right">
        <a href="#" class="head_link">
            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.04 37.66">
                <g id="Groupe_284" data-name="Groupe 284">
                    <path id="Rectangle_174" data-name="Rectangle 174" class="cls-1"
                        d="M3.49,32.86H30.58a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H3.49a2,2,0,0,1-2-2h0A2,2,0,0,1,3.49,32.86Z"
                        transform="translate(-0.01 -0.01)" />
                    <path id="Rectangle_175" data-name="Rectangle 175" class="cls-1"
                        d="M5.27,12.29h0A1.91,1.91,0,0,1,7.18,14.2V28.92a1.91,1.91,0,0,1-1.91,1.91h0a1.92,1.92,0,0,1-1.91-1.91V14.2A1.92,1.92,0,0,1,5.27,12.29Z"
                        transform="translate(-0.01 -0.01)" />
                    <path id="Rectangle_176" data-name="Rectangle 176" class="cls-1"
                        d="M13.11,12.29h0A1.91,1.91,0,0,1,15,14.2V28.92a1.91,1.91,0,0,1-1.91,1.91h0a1.92,1.92,0,0,1-1.91-1.91V14.2A1.92,1.92,0,0,1,13.11,12.29Z"
                        transform="translate(-0.01 -0.01)" />
                    <path id="Rectangle_177" data-name="Rectangle 177" class="cls-1"
                        d="M21,12.29h0a1.91,1.91,0,0,1,1.91,1.91V28.92A1.91,1.91,0,0,1,21,30.83h0A1.92,1.92,0,0,1,19,28.92V14.2A1.92,1.92,0,0,1,21,12.29Z"
                        transform="translate(-0.01 -0.01)" />
                    <path id="Rectangle_178" data-name="Rectangle 178" class="cls-1"
                        d="M28.79,12.29h0A1.91,1.91,0,0,1,30.7,14.2V28.92a1.91,1.91,0,0,1-1.91,1.91h0a1.92,1.92,0,0,1-1.91-1.91V14.2A1.92,1.92,0,0,1,28.79,12.29Z"
                        transform="translate(-0.01 -0.01)" />
                    <path id="Tracé_95" data-name="Tracé 95" class="cls-1"
                        d="M17,10.26H1.41a.64.64,0,0,1-.65-.64.66.66,0,0,1,.35-.57L7.92,5.47,16.73.83a.64.64,0,0,1,.6,0l8.81,4.64L33,9.05a.64.64,0,0,1-.3,1.21Z"
                        transform="translate(-0.01 -0.01)" />
                </g>
            </svg>
            Library
        </a>
        <div class="dropdown">
            <div class="dropdown-toggle  head_link profil" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="img_container">
                    <img src="http://prospero.amo-it-proto.com/media_site/assets/images/fake.png" class="rounded-circle" alt="">
                </div>
                Manu Lechat
            </div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <form>
                    <div class="form_item">
                        <label for="exampleInputEmail1" class="form-label txt_m">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text txt_s">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form_item">
                        <label for="exampleInputPassword1" class="form-label txt_m">Password</label>
                        <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                    </div>
                    <div class="form_item form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label txt_s" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</header>
                
	<div class="main_content ">
		<section class="row project-view" data-object='{"model": "Project", "id": 6}'>
			<div class="col screenHeight">
                <div id="layout" style="width: 100%; height: 100%;"></div>
			</div>
		</section>
		<section class="hidden">
			<div class="card height_50 corpora-table">
    <div class="card-header">
        <div class="left">
            <h3 class="title txt_25">Corpora</h3>
        </div>
        <div class="right">
            <!--<a href="#" class="icon_link edit hidden">
    <i class="bi bi-pencil-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16.992" height="16.973" viewBox="0 0 16.992 16.973">
        <g id="Groupe_122" data-name="Groupe 122" transform="translate(0 0)">
            <path id="Tracé_49" data-name="Tracé 49"
                d="M19.3,5.5h-.531L16.72,7.548l3.224,3.224,2.048-2.048V8.193ZM6.479,17.789,5,22.473l4.684-1.479L18.6,12.08,15.373,8.857Z"
                transform="translate(-5 -5.5)" fill="#707070" />
        </g>
    </svg>
</a>
-->
            <a href="#" class="icon_link plus hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="17.367" height="17.367" viewBox="0 0 17.367 17.367">
        <path id="Tracé_2" data-name="Tracé 2"
            d="M243.867,89.71h-6.71V83H233.21v6.71H226.5v3.947h6.71v6.71h3.947v-6.71h6.71Z"
            transform="translate(-226.5 -83)" fill="#707070" />
    </svg>
</a>
            <a href="#" class="icon_link moins hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 4">
        <g id="Calque_2" data-name="Calque 2">
            <g id="Calque_1-2" data-name="Calque 1">
                <rect id="Rectangle_25" data-name="Rectangle 25" class="cls-1" width="17" height="4" />
            </g>
        </g>
    </svg>
</a>

        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
    <thead>
        <tr>
            <th property-name="name">Name</th>
            <th property-name="author">Author</th>
            <th property-name="tags">Tags</th>
        </tr>
    </thead>
    <tbody>

        <tr class="active">
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin, covid-19, vaccin, covid-19, vaccin, covid-19, vaccin, covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
        <tr>
            <td>Covid-19</td>
            <td>John Doe</td>
            <td>covid-19, vaccin</td>
        </tr>
    </tbody>
</table>
    </div>
</div>
			<div class="card height_25 dico-table">
    <div class="card-header">
        <div class="left">
            <h3 class="title txt_25">Dictionaries</h3>
        </div>
        <div class="right">
            <a href="#" class="icon_link edit hidden">
    <i class="bi bi-pencil-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16.992" height="16.973" viewBox="0 0 16.992 16.973">
        <g id="Groupe_122" data-name="Groupe 122" transform="translate(0 0)">
            <path id="Tracé_49" data-name="Tracé 49"
                d="M19.3,5.5h-.531L16.72,7.548l3.224,3.224,2.048-2.048V8.193ZM6.479,17.789,5,22.473l4.684-1.479L18.6,12.08,15.373,8.857Z"
                transform="translate(-5 -5.5)" fill="#707070" />
        </g>
    </svg>
</a>

            <a href="#" class="icon_link plus hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="17.367" height="17.367" viewBox="0 0 17.367 17.367">
        <path id="Tracé_2" data-name="Tracé 2"
            d="M243.867,89.71h-6.71V83H233.21v6.71H226.5v3.947h6.71v6.71h3.947v-6.71h6.71Z"
            transform="translate(-226.5 -83)" fill="#707070" />
    </svg>
</a>
            <a href="#" class="icon_link moins hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 4">
        <g id="Calque_2" data-name="Calque 2">
            <g id="Calque_1-2" data-name="Calque 1">
                <rect id="Rectangle_25" data-name="Rectangle 25" class="cls-1" width="17" height="4" />
            </g>
        </g>
    </svg>
</a>

        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
    <thead>
        <tr>
            <th property-name="name">Name</th>
            <th property-name="author">Author</th>
            <th property-name="type">Type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dictionary 1</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 2</td>
            <td>John Doe</td>
            <td>Conceptual</td>
        </tr>
        <tr>
            <td>Dictionary 3</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 1</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 2</td>
            <td>John Doe</td>
            <td>Conceptual</td>
        </tr>
        <tr>
            <td>Dictionary 3</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 1</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 2</td>
            <td>John Doe</td>
            <td>Conceptual</td>
        </tr>
        <tr>
            <td>Dictionary 3</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 2</td>
            <td>John Doe</td>
            <td>Conceptual</td>
        </tr>
        <tr>
            <td>Dictionary 3</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 1</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 2</td>
            <td>John Doe</td>
            <td>Conceptual</td>
        </tr>
        <tr>
            <td>Dictionary 3</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 1</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
        <tr>
            <td>Dictionary 2</td>
            <td>John Doe</td>
            <td>Conceptual</td>
        </tr>
        <tr>
            <td>Dictionary 3</td>
            <td>John Doe</td>
            <td>Lexical</td>
        </tr>
    </tbody>
</table>
    </div>
</div>
			<div class="card height_100 text-table">
    <div class="card-header">
        <div class="left">
            <h3 class="title txt_25">Texts</h3>
        </div>
        <div class="right">
            <a href="#" class="icon_link edit hidden">
    <i class="bi bi-pencil-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16.992" height="16.973" viewBox="0 0 16.992 16.973">
        <g id="Groupe_122" data-name="Groupe 122" transform="translate(0 0)">
            <path id="Tracé_49" data-name="Tracé 49"
                d="M19.3,5.5h-.531L16.72,7.548l3.224,3.224,2.048-2.048V8.193ZM6.479,17.789,5,22.473l4.684-1.479L18.6,12.08,15.373,8.857Z"
                transform="translate(-5 -5.5)" fill="#707070" />
        </g>
    </svg>
</a>

            <a href="#" class="icon_link plus hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="17.367" height="17.367" viewBox="0 0 17.367 17.367">
        <path id="Tracé_2" data-name="Tracé 2"
            d="M243.867,89.71h-6.71V83H233.21v6.71H226.5v3.947h6.71v6.71h3.947v-6.71h6.71Z"
            transform="translate(-226.5 -83)" fill="#707070" />
    </svg>
</a>
            <a href="#" class="icon_link moins hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 4">
        <g id="Calque_2" data-name="Calque 2">
            <g id="Calque_1-2" data-name="Calque 1">
                <rect id="Rectangle_25" data-name="Rectangle 25" class="cls-1" width="17" height="4" />
            </g>
        </g>
    </svg>
</a>

        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
    <thead>
        <tr>
            <th property-name="title">Title</th>
            <th property-name="date">Date</th>
            <th property-name="source">Source</th>
            <th property-name="author">Author</th>
            <th property-name="noc">Number of characters</th>
        </tr>
    </thead>
    <tbody>

        <tr class="active">
            <td>Sondage UFC-Que Choisir / CSA74 % des français sont opposés à la taxe carbone. Le refus tombe à 45 % avec un chèque vert.</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr class="active">
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
        <tr>
            <td>Le vaccin contre le Covid-19 sera-t-il obligatoire</td>
            <td>24/05/2020</td>
            <td>Slate</td>
            <td>Jean-Yves Nau</td>
            <td>200 000</td>
        </tr>
    </tbody>
</table>
    </div>
</div>
			<div class="card height_100 editor-panel">
    <div class="text-editor">
    <div class="card-header">
        <div class="left">
            <h3 class="title txt_25">titre</h3>
        </div>
        <div class="right">
            <a href="#" class="icon_link edit hidden">
    <i class="bi bi-pencil-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16.992" height="16.973" viewBox="0 0 16.992 16.973">
        <g id="Groupe_122" data-name="Groupe 122" transform="translate(0 0)">
            <path id="Tracé_49" data-name="Tracé 49"
                d="M19.3,5.5h-.531L16.72,7.548l3.224,3.224,2.048-2.048V8.193ZM6.479,17.789,5,22.473l4.684-1.479L18.6,12.08,15.373,8.857Z"
                transform="translate(-5 -5.5)" fill="#707070" />
        </g>
    </svg>
</a>

            <a href="#" class="icon_link plus hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="17.367" height="17.367" viewBox="0 0 17.367 17.367">
        <path id="Tracé_2" data-name="Tracé 2"
            d="M243.867,89.71h-6.71V83H233.21v6.71H226.5v3.947h6.71v6.71h3.947v-6.71h6.71Z"
            transform="translate(-226.5 -83)" fill="#707070" />
    </svg>
</a>
            <a href="#" class="icon_link moins hidden">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 4">
        <g id="Calque_2" data-name="Calque 2">
            <g id="Calque_1-2" data-name="Calque 1">
                <rect id="Rectangle_25" data-name="Rectangle 25" class="cls-1" width="17" height="4" />
            </g>
        </g>
    </svg>
</a>

        </div>
    </div>
    <div class="card-body">
        <div class="cartouche txt_15">

            <div class="cartouche_item">
                <label>Title: </label>
                Le vaccin contre le Covid-19 sera-t-il obligatoire ?
            </div>
            <div class="cartouche_item">
                <label>Author: </label>
                Jean-Yves Nau
            </div>
            <div class="cartouche_item">
                <label>Source: </label>
                Slate
            </div>
            <div class="cartouche_item">
                <label>Date: </label>
                May 25, 2020
            </div>
            <div class="cartouche_item">
                <label>Support: </label>
                Internet
            </div>
            <div class="cartouche_item">
                <label>Number of characters: </label>
                200 000
            </div>

        </div>
        <article class="main_article text-container">

            <p>
                Formidable paradoxe: alors qu’on ne cesse d’évoquer les bénéfices d’un vaccin protecteur contre le
                Covid-19, les ventes de vaccins ne cessent, en France de diminuer; atteignant, durant le
                confinement, moins 50% pour l’obligatoire rougeole-oreillons-rubéole. Conséquence: un risque
                croissant de résurgence épidémique de maladies infectieuses et contagieuses. Un risque d’autant
                plus grand qu’il s’inscrit dans le cadre plus général d’une opposition, à la fois latente et
                structurée, au principe même de la vaccination.
            </p>
            <p>
                Dans ce contexte, on peut prévoir l’émergence sous une nouvelle forme, de la confrontation entre
                les libertés individuelles et un pouvoir exécutif imposant une contrainte corporelle au nom de la
                santé publique. Imposer, de gré ou de force, le futur vaccin contre le Covid-19?
            </p>
            <p>
                Cette confrontation bien connue, qui nourrit le combat des anti-vaccins, prendra alors une
                nouvelle dimension. À la fois du fait de la dimension pandémique de la maladie, mais aussi et
                surtout de ses innombrables conséquences médicales et économiques, politiques et diplomatiques.
            </p>
            <p>
                Il n’est pas trop tôt pour s’intéresser à ce sujet. Si certaines interrogations théoriques
                demeurent, tout laisse penser, au vu des efforts considérables déployés à l’échelle international,
                que l’on parviendra à mettre au point plusieurs vaccins protecteurs contre le Covid-19; les
                premiers pouvant être mis sur le marché durant l’année 2021.
            </p>
            <p>
                Or un sondage Ifop pour le consortium Coconel (Coronavirus et confinement: enquête longitudinale)
                réalisé fin mars 2020 établit que plus d’un quart des Français·es (26%) ne voudraient pas se faire
                vacciner contre le SARS-CoV-2. «Ce refus est plus important chez les femmes, notamment les jeunes,
                alors que ce sont elles, souvent, qui prennent les décisions vaccinales pour les enfants», pointe
                dans Le Monde Patrick Peretti-Watel, sociologue, directeur de recherche à l’Inserm et coordinateur
                scientifique du projet Coconel.
            </p>
            <p>
                «Le pourcentage de refus est plus élevé (39%) chez les 26-35 ans. Un tiers environ des employés et
                des ouvriers le refuseraient aussi, alors que, chez les cadres et professions intellectuelles
                supérieures, le taux de refus n’est que de 16%.»
            </p>

        </article>
    </div>
</div>
</div>
			
		</section>
	</div>
	<script>
		prospero.onload(function() {
			var mainLayout = new PLayout($('#layout'));
			var lock1 = mainLayout.init([
				{ type: 'left', size: '33%', resizable: true, content: 'left' },
				{ type: 'main', content: 'main' },
				{ type: 'right', size: '33%', resizable: true, content: 'right' }
			]);
			prospero.wait(lock1, function() {
				//w2ui['layout'].html('left', '<div id="layout2" style="width:100%; height:100%;"></div>');
				var $leftPanel = mainLayout.getPanel('left');
				var $container = $('<div id="layout2" style="width:100%; height:100%;"></div>')
				$leftPanel.append($container);
				var leftLayout = new PLayout($container);
				var lock2 = leftLayout.init([
					{ type: 'main' },
					{ type: 'preview', size: '50%', resizable: true, content: 'preview' }
				]);
				prospero.wait(lock2, function() {
					leftLayout.getPanel('main').append($(".corpora-table"));
					leftLayout.getPanel('preview').append($(".dico-table"));
					mainLayout.getPanel('main').append($(".text-table"));
					mainLayout.getPanel('right').append($(".editor-panel"));

					/*
					var $projectView = $(".project-view");
					var projectView = new PProjectView($projectView, $projectView.data("object"));
					projectView.load();
					var importModal = new ImportModal($(".import-modal"));
					var approvalModal = new ApprovalModal($(".approval-modal"));
					var newTextModal = new NewTextModal($(".new-text-modal"));
					var newCorpusModal = new NewCorpusModal($(".new-corpus-modal"));
					var exportModal = new ExportModal($(".export-modal"));
					*/
					/*
					prospero.onload(function() {
						exportModal.show();
					});
					*/
				});
			});
		});
	</script>

            </section>
        </main>
        <script src="http://prospero.amo-it-proto.com/media_site/assets/js/prefixfree.min.js"></script>
    </body>
</html>