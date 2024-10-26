<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <link rel="stylesheet" href="{{ asset('css/bounty.css') }}">
    <title>White Hat</title>
</head>
@include('nav')
<body>
    <div class="bounty">
        <div class="column_one">
            <div class="columnsearch container-xs">
                <label class="search ui input gray_600 size-md underline square">
                    <input name="search" type="text"/>
                </label>
                <div class="bountypost">
                    <div class="bountypost-1 container-xs">
                        <div class="rowlineseven">
                            <div >
                                <div class="rowprice-4">
                                    <div class="rowbountytitle-4">
                                        <p class="bountytitle-4 ui text size-title">Bounty Title</p>
                                        <p class="company-4 ui text size-base">Company</p>


                                    </div>
                                        <p class="theultimate ui text size-title">$$$</p>


                                </div>
                                    <div class="lineseven_one">

                                    </div>
                            </div>
                                <p class="bounty-1 ui text size-base">Bounty Description</p>

                        </div>
                            <div class ="bountypost-2">
                                <div class ="columnbountytit"></div>
                                <div class="rowprice">
                                <div class="rowbountytitle">
                                    <p class ="bountytitle ui text">Bounty Title</p>
                                    <p class="company ui text">Company</p>

                                </div>
                                    <p class="price ui text">$$$</p>
                                </div>
                                    <div class ="lineseven_one-2">
                                        <p class ="bounty-5 ui text">Bounty Description</p>
                                    </div>

                            </div>
                            <div class ="bountypost-3">
                                <div class="rowprice"></div>
                                <div class="rowbountytitle"></div>
                                <p class ="bountytitle ui text">Bounty Title</p>
                                <p class ="company ui text">Company</p>
                            </div>
                                <p class="price ui text">$$$</p>

                    </div>
                    <div class="lineseve_one-2">

                    </div>
                    <p class ="bounty-2 ui text">Bounty Description</p>

                </div>
                    <div class ="bountypost-3">
                        <div class ="rowprice">
                            <div class="rowbountytitle">
                                <p class ="bountytitle ui text">Bounty Title</p>
                                <p class ="company ui text">Company</p>

                            </div>
                            <p class="price ui text">$$$</p>

                        </div>
                        <div class="lineseven_one-2">
                            <p class="bounty-2 ui text">Bounty Description</p>

                        </div>
                        <div class="bountypost-3">
                            <div class="rowprice">
                                <div class="rowbountytitle">
                                    <p class ="bountytitle ui text">Bounty Description</p>
                                    <p class="company ui text">Company</p>


                                </div>
                                <p class="price ui text">$$$</p>

                            </div>
                            <div class="lineseven_one-2">
                                <p class="bounty-2 ui text">Bounty Description</p>

                            </div>

                        </div>

                    </div>
            </div>
            <footer class="footer">
                <div class="columnlineseven">
                    <div class="lineseven_three">

                    </div>
                    <p class="class-2024whitehatxch ui text size-textxs">2024</p>

                </div>

            </footer>
        </div>
    </div>
</body>
@include('footer')
</html>
