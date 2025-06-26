<!DOCTYPE html>
<html lang="en">


<x-dashboard.includes.header />

<body>
    <div class="wrapper">


        <x-dashboard.includes.sidebar />


        <div class="main-panel">


            <x-dashboard.includes.nav />



            <div class="container">
                <div class="page-inner">


                    @yield('content')


                </div>
            </div>
        </div>



        <x-dashboard.includes.footer />



        <x-dashboard.includes.scripts />




    </div>


</body>

</html>
