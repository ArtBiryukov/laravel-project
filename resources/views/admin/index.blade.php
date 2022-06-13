<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{--Sprites--}}
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="logo-white" viewBox="0 0 256 256">
            <g transform="translate(128 128) scale(0.72 0.72)">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05) scale(3.89 3.89)">
                    <path d="M 29.31 51.247 c -0.311 0 -0.61 -0.145 -0.803 -0.404 l -5.99 -8.066 v 7.47 c 0 0.553 -0.448 1 -1 1 s -1 -0.447 -1 -1 V 39.753 c 0 -0.431 0.276 -0.814 0.686 -0.949 c 0.407 -0.134 0.859 0.007 1.117 0.353 l 5.99 8.066 v -7.47 c 0 -0.552 0.448 -1 1 -1 s 1 0.448 1 1 v 10.494 c 0 0.432 -0.276 0.814 -0.686 0.949 C 29.521 51.23 29.415 51.247 29.31 51.247 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 40.161 46 c 0.552 0 1 -0.448 1 -1 s -0.448 -1 -1 -1 h -4.293 v -3.247 h 4.293 c 0.552 0 1 -0.448 1 -1 s -0.448 -1 -1 -1 h -5.293 c -0.552 0 -1 0.448 -1 1 v 10.494 c 0 0.553 0.448 1 1 1 h 5.293 c 0.552 0 1 -0.447 1 -1 s -0.448 -1 -1 -1 h -4.293 V 46 H 40.161 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 54.438 51.247 c -0.43 0 -0.814 -0.275 -0.95 -0.687 l -2.51 -7.614 l -2.509 7.614 c -0.141 0.425 -0.514 0.713 -0.995 0.686 c -0.447 -0.02 -0.827 -0.335 -0.929 -0.771 L 44.098 39.98 c -0.125 -0.538 0.208 -1.076 0.747 -1.201 c 0.537 -0.127 1.076 0.209 1.201 0.747 l 1.639 7.026 l 2.344 -7.112 c 0.136 -0.41 0.519 -0.687 0.95 -0.687 s 0.814 0.277 0.95 0.687 l 2.345 7.113 l 1.639 -7.027 c 0.125 -0.538 0.656 -0.875 1.201 -0.747 c 0.537 0.125 0.872 0.663 0.746 1.201 l -2.447 10.495 c -0.102 0.436 -0.481 0.751 -0.929 0.771 C 54.468 51.247 54.453 51.247 54.438 51.247 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 64.859 51.247 h -3.915 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 3.915 c 0.896 0 1.624 -0.729 1.624 -1.623 c 0 -0.896 -0.729 -1.624 -1.624 -1.624 h -1.291 c -1.998 0 -3.624 -1.625 -3.624 -3.624 s 1.626 -3.624 3.624 -3.624 h 3.023 c 0.553 0 1 0.448 1 1 s -0.447 1 -1 1 h -3.023 c -0.896 0 -1.624 0.729 -1.624 1.624 S 62.673 44 63.568 44 h 1.291 c 1.998 0 3.624 1.625 3.624 3.624 C 68.483 49.622 66.857 51.247 64.859 51.247 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 86.711 32.4 C 81.2 14.134 64.146 1.43 45 1.43 C 25.854 1.43 8.8 14.134 3.289 32.4 C 1.411 32.817 0 34.49 0 36.492 v 17.016 c 0 2.002 1.411 3.675 3.289 4.092 C 8.8 75.866 25.854 88.57 45 88.57 c 19.146 0 36.2 -12.704 41.711 -30.97 C 88.589 57.183 90 55.51 90 53.508 V 36.492 C 90 34.49 88.589 32.817 86.711 32.4 z M 5.413 32.295 c 1.423 -4.437 3.562 -8.519 6.269 -12.129 h 13.753 c -1.353 3.635 -2.418 7.709 -3.142 12.129 H 5.413 z M 27.611 20.166 H 44 v 12.129 H 24.319 C 25.069 27.858 26.192 23.776 27.611 20.166 z M 46 3.478 c 6.099 0.546 11.707 6.057 15.55 14.688 H 46 V 3.478 z M 44 18.166 H 28.45 C 32.294 9.535 37.903 4.024 44 3.478 V 18.166 z M 46 20.166 h 16.39 c 1.418 3.611 2.541 7.693 3.291 12.129 H 46 V 20.166 z M 67.706 32.295 c -0.724 -4.401 -1.811 -8.479 -3.195 -12.129 h 13.807 c 2.707 3.61 4.845 7.693 6.268 12.129 H 67.706 z M 76.713 18.166 H 63.702 c -2.656 -6.212 -6.2 -11.021 -10.232 -13.856 C 62.588 6.225 70.764 11.173 76.713 18.166 z M 36.328 4.356 c -4.004 2.827 -7.485 7.595 -10.096 13.809 H 13.286 C 19.191 11.225 27.291 6.302 36.328 4.356 z M 84.586 57.705 c -1.423 4.437 -3.561 8.519 -6.268 12.13 H 64.565 c 1.353 -3.635 2.418 -7.709 3.142 -12.13 H 84.586 z M 62.39 69.835 H 46 v -12.13 h 19.681 C 64.931 62.142 63.808 66.224 62.39 69.835 z M 44 86.522 c -6.097 -0.546 -11.705 -6.057 -15.55 -14.687 H 44 V 86.522 z M 46 71.835 h 15.55 c -3.844 8.63 -9.453 14.141 -15.55 14.687 V 71.835 z M 44 69.835 H 27.611 c -1.419 -3.611 -2.541 -7.693 -3.292 -12.13 H 44 V 69.835 z M 22.292 57.705 c 0.725 4.421 1.79 8.495 3.142 12.13 H 11.682 c -2.707 -3.611 -4.845 -7.693 -6.269 -12.13 H 22.292 z M 13.286 71.835 h 12.945 c 2.611 6.214 6.092 10.982 10.096 13.809 C 27.291 83.698 19.191 78.776 13.286 71.835 z M 53.672 85.644 c 4.004 -2.827 7.485 -7.595 10.096 -13.809 h 12.945 C 70.808 78.776 62.709 83.698 53.672 85.644 z M 88 53.508 c 0 1.212 -0.985 2.197 -2.197 2.197 H 4.197 C 2.985 55.705 2 54.72 2 53.508 V 36.492 c 0 -1.211 0.985 -2.197 2.197 -2.197 h 81.606 c 1.212 0 2.197 0.986 2.197 2.197 V 53.508 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </g>
        </symbol>
        <symbol id="logo-black" viewBox="0 0 256 256">
            <g transform="translate(128 128) scale(0.72 0.72)">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05) scale(3.89 3.89)">
                    <path d="M 29.31 51.247 c -0.311 0 -0.61 -0.145 -0.803 -0.404 l -5.99 -8.066 v 7.47 c 0 0.553 -0.448 1 -1 1 s -1 -0.447 -1 -1 V 39.753 c 0 -0.431 0.276 -0.814 0.686 -0.949 c 0.407 -0.134 0.859 0.007 1.117 0.353 l 5.99 8.066 v -7.47 c 0 -0.552 0.448 -1 1 -1 s 1 0.448 1 1 v 10.494 c 0 0.432 -0.276 0.814 -0.686 0.949 C 29.521 51.23 29.415 51.247 29.31 51.247 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(1,1,1); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 40.161 46 c 0.552 0 1 -0.448 1 -1 s -0.448 -1 -1 -1 h -4.293 v -3.247 h 4.293 c 0.552 0 1 -0.448 1 -1 s -0.448 -1 -1 -1 h -5.293 c -0.552 0 -1 0.448 -1 1 v 10.494 c 0 0.553 0.448 1 1 1 h 5.293 c 0.552 0 1 -0.447 1 -1 s -0.448 -1 -1 -1 h -4.293 V 46 H 40.161 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(1,1,1); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 54.438 51.247 c -0.43 0 -0.814 -0.275 -0.95 -0.687 l -2.51 -7.614 l -2.509 7.614 c -0.141 0.425 -0.514 0.713 -0.995 0.686 c -0.447 -0.02 -0.827 -0.335 -0.929 -0.771 L 44.098 39.98 c -0.125 -0.538 0.208 -1.076 0.747 -1.201 c 0.537 -0.127 1.076 0.209 1.201 0.747 l 1.639 7.026 l 2.344 -7.112 c 0.136 -0.41 0.519 -0.687 0.95 -0.687 s 0.814 0.277 0.95 0.687 l 2.345 7.113 l 1.639 -7.027 c 0.125 -0.538 0.656 -0.875 1.201 -0.747 c 0.537 0.125 0.872 0.663 0.746 1.201 l -2.447 10.495 c -0.102 0.436 -0.481 0.751 -0.929 0.771 C 54.468 51.247 54.453 51.247 54.438 51.247 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(1,1,1); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 64.859 51.247 h -3.915 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 3.915 c 0.896 0 1.624 -0.729 1.624 -1.623 c 0 -0.896 -0.729 -1.624 -1.624 -1.624 h -1.291 c -1.998 0 -3.624 -1.625 -3.624 -3.624 s 1.626 -3.624 3.624 -3.624 h 3.023 c 0.553 0 1 0.448 1 1 s -0.447 1 -1 1 h -3.023 c -0.896 0 -1.624 0.729 -1.624 1.624 S 62.673 44 63.568 44 h 1.291 c 1.998 0 3.624 1.625 3.624 3.624 C 68.483 49.622 66.857 51.247 64.859 51.247 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(1,1,1); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 86.711 32.4 C 81.2 14.134 64.146 1.43 45 1.43 C 25.854 1.43 8.8 14.134 3.289 32.4 C 1.411 32.817 0 34.49 0 36.492 v 17.016 c 0 2.002 1.411 3.675 3.289 4.092 C 8.8 75.866 25.854 88.57 45 88.57 c 19.146 0 36.2 -12.704 41.711 -30.97 C 88.589 57.183 90 55.51 90 53.508 V 36.492 C 90 34.49 88.589 32.817 86.711 32.4 z M 5.413 32.295 c 1.423 -4.437 3.562 -8.519 6.269 -12.129 h 13.753 c -1.353 3.635 -2.418 7.709 -3.142 12.129 H 5.413 z M 27.611 20.166 H 44 v 12.129 H 24.319 C 25.069 27.858 26.192 23.776 27.611 20.166 z M 46 3.478 c 6.099 0.546 11.707 6.057 15.55 14.688 H 46 V 3.478 z M 44 18.166 H 28.45 C 32.294 9.535 37.903 4.024 44 3.478 V 18.166 z M 46 20.166 h 16.39 c 1.418 3.611 2.541 7.693 3.291 12.129 H 46 V 20.166 z M 67.706 32.295 c -0.724 -4.401 -1.811 -8.479 -3.195 -12.129 h 13.807 c 2.707 3.61 4.845 7.693 6.268 12.129 H 67.706 z M 76.713 18.166 H 63.702 c -2.656 -6.212 -6.2 -11.021 -10.232 -13.856 C 62.588 6.225 70.764 11.173 76.713 18.166 z M 36.328 4.356 c -4.004 2.827 -7.485 7.595 -10.096 13.809 H 13.286 C 19.191 11.225 27.291 6.302 36.328 4.356 z M 84.586 57.705 c -1.423 4.437 -3.561 8.519 -6.268 12.13 H 64.565 c 1.353 -3.635 2.418 -7.709 3.142 -12.13 H 84.586 z M 62.39 69.835 H 46 v -12.13 h 19.681 C 64.931 62.142 63.808 66.224 62.39 69.835 z M 44 86.522 c -6.097 -0.546 -11.705 -6.057 -15.55 -14.687 H 44 V 86.522 z M 46 71.835 h 15.55 c -3.844 8.63 -9.453 14.141 -15.55 14.687 V 71.835 z M 44 69.835 H 27.611 c -1.419 -3.611 -2.541 -7.693 -3.292 -12.13 H 44 V 69.835 z M 22.292 57.705 c 0.725 4.421 1.79 8.495 3.142 12.13 H 11.682 c -2.707 -3.611 -4.845 -7.693 -6.269 -12.13 H 22.292 z M 13.286 71.835 h 12.945 c 2.611 6.214 6.092 10.982 10.096 13.809 C 27.291 83.698 19.191 78.776 13.286 71.835 z M 53.672 85.644 c 4.004 -2.827 7.485 -7.595 10.096 -13.809 h 12.945 C 70.808 78.776 62.709 83.698 53.672 85.644 z M 88 53.508 c 0 1.212 -0.985 2.197 -2.197 2.197 H 4.197 C 2.985 55.705 2 54.72 2 53.508 V 36.492 c 0 -1.211 0.985 -2.197 2.197 -2.197 h 81.606 c 1.212 0 2.197 0.986 2.197 2.197 V 53.508 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(1,1,1); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </g>
        </symbol>
        <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>
        <symbol id="icon-watch" viewBox="0 0 512 512">
            <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            <circle cx="256" cy="256" r="80" fill="none" stroke="black" stroke-miterlimit="10" stroke-width="32" />
        </symbol>
    </svg>

    {{--Header--}}

    <header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
            <svg class="bi me-2" width="40" height="45">
                <use xlink:href="#logo-white" />
            </svg>
            <span class="fs-4 text-white">GB News</span>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Выход</a>
            </div>
        </div>
    </header>

    {{--Begin page content--}}

    Текстовыая новдаыщтащывтащолфытвшщпофывклщтепоьщфыукткпшщзцуоьткйпмщоьцуккщоьтпмзйоьтпкшщзопе

    {{--Footer--}}

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-light container-fluid">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi me-2" width="40" height="45">
                    <use xlink:href="#logo-black" />
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook" />
                    </svg></a></li>
        </ul>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>