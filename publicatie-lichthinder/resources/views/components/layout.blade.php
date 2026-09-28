<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .body {
            width: 100vw;
            height: 100vh;
            background-color: #F7F9F4;
            display: flex;
            overflow: hidden;
        }

        /* sidebar */
        .sidebar {
            width: 20vw;
            background-color: #E3F0E4;
            border-right: #1A1A1A solid 3px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .sidebarContent {
            flex: 1;
            margin-left: 5%
        }

        .sidebarItem {
            background-color: #F7F9F4;
            color: #1B3B2A;
            padding: 7% 5%;
            width: 95%;
            margin-top: 5%;
            border-radius: 15px;
            font-family: "Arial";
            font-weight: bold;
            font-size: x-large;
            text-align: start;
        }

        .sidebarItem:hover {
            background-color: #1B3B2A;
            color: #F7F9F4;
        }

        .sidebarItem-selected {
            background-color: #1B3B2A;
            color: #F7F9F4;
            padding: 7% 5%;
            width: 95%;
            margin-top: 5%;
            border-radius: 15px;
            font-family: "Arial";
            font-weight: bold;
            font-size: x-large;
            text-align: start;
        }

        .sidebarItem-selected:hover {
            background-color: #F7F9F4;
            color: #1B3B2A;
        }

        .sidebarBottom {
            margin-top: auto;
            height: 10%;
            padding-left: 5%;
        }

        .userInfo {
            display: flex;
            margin-bottom: 5px;
        }

        .sidebarUserRole {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: x-small;
            margin-left: 3px;
        }

        .sidebarLogo {
            width: 100%
        }

        .divider {
            height: 2px;
            width: 100%;
            margin: 0 auto;
            background: linear-gradient(to right,
                    #E3F0E4 0%,
                    #E8A33D 50%,
                    #E3F0E4 100%);
        }

        /* topbar */
        .topbar {
            width: ;
            height: 7%;
            background-color: #1B3B2A;
        }

        .topbarText {
            font-family: "Arial";
            font-weight: bold;
            color: #E8A33D;
            margin-left: 1vw;
        }

        .main {
            width: 80vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .content {
            flex: 1;
            overflow-y: auto;
        }

        nav[role="navigation"]>div.sm\:hidden {
            display: none !important;
        }

        nav[role="navigation"] div.hidden.sm\:flex-1>div:first-child {
            display: none !important;
        }

        nav[role="navigation"] div.hidden.sm\:flex-1 {
            margin-bottom: 4px;
            justify-content: center !important;
        }

        .itemsContainer {
            flex: 1;
            padding: 50px;
            padding-top: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            column-gap: 60px;
            row-gap: 30px;
        }

        .item {
            background-color: #E3F0E4;
            border: #1A1A1A solid 3px;
            border-radius: 20px;
            padding: 5%;
            display: block;
            text-decoration: none;
            color: inherit;
            padding-bottom: 0%;
        }

        .filterButton {
            margin-top: 5px;
            border: #1A1A1A solid 1px;
            margin-left: 50px;
        }

        .filters {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .summary {
            padding: 5% 0%;
        }

        .productName {
            font-family: "Arial";
            font-weight: bold;
            font-size: large;
        }

        .productPrice {
            font-family: "Arial";
            font-size: large;
            padding-top: 10px
        }

        .authErrorText {
            color: red;
            margin-bottom: 0%;
        }

        .list {
            background-color: #E3F0E4;
            border: #1A1A1A solid 3px;
            border-radius: 20px;
            width: 95%;
            margin-left: 2.5%;
            padding: 1%;
        }

        .listExplination {
            width: 95%;
            margin-left: 2.5%;
            padding: 1%;
        }

        .listExplinationItemContainer {
            gap: 20px;
            padding: 10px;
            display: flex;
        }

        .listExplinationItemContainer h5 {
            margin: 0%;
            display: flex;
            justify-content: center;
        }

        .accordion-item {
            padding: 10px;
        }

        .accordion-item.closed {
            background-color: #E3F0E4;
        }

        .accordion-item.clickable.closed:hover {
            background-color: #a6f3ad;
        }

        .accordion-header {
            display: flex;
            gap: 20px;
            align-items: center;
            cursor: pointer;
        }

        .list h5, {
            margin: 0%;
            display: flex;
            justify-content: center;
        }

        .listBadge {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.2% 0.5%;
            border-radius: 5px;
        }

        .listBadge h6 {
            margin-bottom: 2px;
            color: #F7F9F4;
        }

        .accordion-content {
            display: none;
        }

        .listDivider {
            height: 2px;
            width: 100%;
            margin: 0 auto;
            background: #E8A33D;
        }

        .addCategory {
            display: flex;
            width: fit-content;
            background-color: #F7F9F4;
            border: #1A1A1A solid 3px;
            border-radius: 20px;
            padding: 1%;
            gap: 5px;
        }

        .addCategory input {
            border: #1A1A1A solid 1px;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<div class="body">
    <x-sidebar />
    <div class='main'>
        <x-topbar title="{{ $title }}" />

        <div class="content">
            {{ $slot }}
        </div>
    </div>
</div>
