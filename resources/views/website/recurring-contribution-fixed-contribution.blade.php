@extends('website.layouts.app')

@section('title', 'Recurring Contribution &
Fixed Contribution (RC & FC)')

@section('content')
<div class="abtPage proInnerBanner">
    <div class="banner-sec" style="background-image: url('{{ asset('website/images/rdfc-banner.jpg') }}');">
        <div class="overlay"></div>
        <h3 data-aos="fade-up"
            data-aos-duration="500">Together, We Grow Stronger.
        </h3>
    </div>
</div>
<div class="section ">

    <div class="projectInnerPage">


        <div class="container pt-80 home-about">
            <div class="row dv-center">
                <div class="col-sm-6 col-md-6">
                    <div class="top_left_img" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <img src="{{ asset('website/images/rcfc-left.jpg') }}" alt="Icon" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 " data-aos="fade-up"
                    data-aos-duration="500">

                    <h1 class="jumbolead reset-section-heading">Recurring Contribution & Fixed Contribution (RC & FC)</h1>
                    <p>Recurring Contribution & Fixed Contribution (RC
                        & FC) schemes to provide secure and growth
                        oriented financial solutions for our members.</p>

                </div>
            </div>
        </div>


        <div class="container rcfc_sec">
            <div class="row dv-center">
                <div class="rec_table" style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th colspan="4" class="bg_green_head">ONE TIME CONTRIBUTION SCHEME FOR MEMBERS</th>
                        </tr>
                        <tr>
                            <th rowspan="2" class="subhead">SL NO</th>
                            <th rowspan="2" class="subhead">PERIOD</th>
                            <th colspan="2" class="subhead">RATE OF RETURN % (P.A)</th>

                        </tr>
                        <tr>
                            <th class="subhead">NORMAL</th>
                            <th class="subhead">SENIOR CITIZEN</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>1 YEAR</td>
                            <td>10.0%</td>
                            <td>10.5%</td>
                        </tr>
                        <tr class="green_row">
                            <td>02</td>
                            <td>2 YEAR</td>
                            <td>10.5%</td>
                            <td>11.0%</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>3 YEAR</td>
                            <td>11.0%</td>
                            <td>11.5%</td>
                        </tr>
                        <tr class="green_row">
                            <td>04</td>
                            <td>5 YEAR</td>
                            <td>12.0%</td>
                            <td>12.5%</td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="row dv-center">
                <div class="rec_table " style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th colspan="3" class="bg_green_head">RECURRING CONTRIBUTION SCHEME FOR MEMBERS</th>
                        </tr>
                        <tr>
                            <th class="subhead">SL NO</th>
                            <th class="subhead">PERIOD</th>
                            <th class="subhead">RATE OF RETURN % (P.A)</th>

                        </tr>

                        <tr>
                            <td>01</td>
                            <td>1 YEAR</td>
                            <td>10.00%</td>
                        </tr>
                        <tr class="green_row">
                            <td>02</td>
                            <td>2 YEAR</td>
                            <td>10.50%</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>3 YEAR</td>
                            <td>11.00%</td>
                        </tr>

                    </table>
                </div>

            </div>

            <h5>NATURAL FIXED CONTRIBUTION (NFC)</h5>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP1 YEAR1 (9.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>5475</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>10950</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>21900</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>32850</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>43800</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>54750</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>109500</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>219000</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>547500</td>
                            </tr>


                        </table>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP2 YEAR2 (10%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>6050</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>12100</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>24200</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>36300</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>48400</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>60500</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>121000</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>242000</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>605000</td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP3 YEAR3 (10.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>6746</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>13492</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>26985</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>40477</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>53969</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>67462</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>134923</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>269847</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>674616</td>
                            </tr>


                        </table>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP4 YEAR4 (11%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>7590</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>15181</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>30361</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>45542</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>60723</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>75904</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>151807</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>303614</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>759035</td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP5 YEAR5 (12%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>8812</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>17623</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>35247</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>52870</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>70494</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>88117</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>176234</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>352468</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>881171</td>
                            </tr>


                        </table>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP6 YEAR6 (12.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>10000</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>20000</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>40000</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>60000</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>80000</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>100000</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>200000</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>400000</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>1000000</td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="2" class="bg_green_head">PLAN FABP7 YEAR7 (13%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">AMT.CONT</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>5000</td>
                                <td>11763</td>
                            </tr>
                            <tr class="green_row">
                                <td>10000</td>
                                <td>23526</td>
                            </tr>
                            <tr>
                                <td>20000</td>
                                <td>47052</td>
                            </tr>
                            <tr class="green_row">
                                <td>30000</td>
                                <td>70578</td>
                            </tr>
                            <tr>
                                <td>40000</td>
                                <td>94104</td>
                            </tr>
                            <tr class="green_row">
                                <td>50000</td>
                                <td>117630</td>
                            </tr>
                            <tr>
                                <td>100000</td>
                                <td>235261</td>
                            </tr>
                            <tr class="green_row">
                                <td>200000</td>
                                <td>470521</td>
                            </tr>
                            <tr>
                                <td>500000</td>
                                <td>1176303</td>
                            </tr>


                        </table>
                    </div>
                    <p class="condition">*SCHEME ONLY FOR MEMBERS</p>
                </div>

            </div>

            <h5 >NATURAL RECURRING CONTRIBUTION (NRC)</h5>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 1 YEAR(9%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>6000</td>
                                <td>6298</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>12000</td>
                                <td>12597</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>24000</td>
                                <td>25194</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>36000</td>
                                <td>37790</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>48000</td>
                                <td>50387</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>60000</td>
                                <td>62984</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>120000</td>
                                <td>125968</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 2YEAR
                                    (9.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>12000</td>
                                <td>13252</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>24000</td>
                                <td>26505</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>48000</td>
                                <td>53009</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>72000</td>
                                <td>79514</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>96000</td>
                                <td>106019</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>120000</td>
                                <td>132523</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>240000</td>
                                <td>265047</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 3YEAR
                                    (10%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>18000</td>
                                <td>20997</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>36000</td>
                                <td>41994</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>72000</td>
                                <td>83987</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>108000</td>
                                <td>125981</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>144000</td>
                                <td>167975</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>180000</td>
                                <td>209969</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>360000</td>
                                <td>419937</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 4YEA R
                                    (10.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>24000</td>
                                <td>29784</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>48000</td>
                                <td>59567</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>96000</td>
                                <td>119135</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>144000</td>
                                <td>178702</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>192000</td>
                                <td>238269</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>240000</td>
                                <td>297837</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>480000</td>
                                <td>595673</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 5YEAR
                                    (11.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>30000</td>
                                <td>40052</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>60000</td>
                                <td>80104</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>120000</td>
                                <td>160208</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>180000</td>
                                <td>240312</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>240000</td>
                                <td>320416</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>300000</td>
                                <td>400520</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>600000</td>
                                <td>801040</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 6YEAR
                                    (12%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>36000</td>
                                <td>51801</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>72000</td>
                                <td>103603</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>144000</td>
                                <td>207205</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>216000</td>
                                <td>310808</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>288000</td>
                                <td>414410</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>360000</td>
                                <td>518013</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>720000</td>
                                <td>1036025</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row dv-center">
                <div class="col-md-6 ">
                    <div class="rec_table " style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th colspan="3" class="bg_green_head">PLAN RC 7YEAR
                                    (12.5%)</th>
                            </tr>
                            <tr>
                                <th class="subhead">MLY</th>
                                <th class="subhead">AMT.CONT.</th>
                                <th class="subhead">MATURITY</th>

                            </tr>

                            <tr>
                                <td>500</td>
                                <td>42000</td>
                                <td>65561</td>
                            </tr>
                            <tr class="green_row">
                                <td>1000</td>
                                <td>84000</td>
                                <td>131122</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>168000</td>
                                <td>262243</td>
                            </tr>
                            <tr class="green_row">
                                <td>3000</td>
                                <td>252000</td>
                                <td>393365</td>
                            </tr>
                            <tr>
                                <td>4000</td>
                                <td>336000</td>
                                <td>524487</td>
                            </tr>
                            <tr class="green_row">
                                <td>5000</td>
                                <td>420000</td>
                                <td>655609</td>
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>840000</td>
                                <td>1311217</td>
                            </tr>
                        </table>
                    </div>
                    <p class="condition pb-30">*SCHEME ONLY FOR MEMBERS</p>
                </div>

            </div>
        </div>

    </div>



    <!--===================================== TESTIMONIAL START ==================================-->
      {{-- @if($testimonials->count() > 0) --}}

    @include('website.testimonial')
    {{-- @endif --}}
<!--===================================== TESTIMONIAL END ==================================-->
<!--===================================== MEMBERSHIP START ======================================-->
<!-- <section class="membership-section" id="memberForm">
    <div class="membership-left">
        <img src="{{ asset('website/images/card.png') }}" alt="Icon">
        <div class="membership-text">
            <h2>Membership</h2>
            <p>
                Membership is an affiliation granted to members who are well involved in agricultural activities within a particular society or community. The membership recognizes one’s significant commitment, dedication, and contribution to the agricultural society.
            </p>
        </div>
    </div>
    <div class="membership-right">
        <h4>Get in Touch</h4>
        <h2>Contact with us</h2>
        <form action="{{ route('website.contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required />
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="tel" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </div>
</section> -->



<section class="membership-section" id="memberForm">
    <div class="container">
        <div class="row dv-center">
            <div class="col-sm-4 col-md-4">
                <div class="membership-left-img" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="{{ asset('website/images/card.png') }}" alt="Icon">
                </div>
            </div>
            <div class="col-sm-4 col-md-4" data-aos="fade-up">
                <div class="membership-text">
                    <h2>Membership</h2>
                    <p>
                        Membership is an affiliation granted to members who are well involved in agricultural activities within a particular society or community. The membership recognizes one’s significant commitment, dedication, and contribution to the agricultural society.
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 mob-100">
                <div class="membership-right">
                    <h4>Get in Touch</h4>
                    <h2>Contact with us</h2>
                    <form action="{{ route('website.contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required />
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <input type="tel" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!--===================================== MEMBERSHIP END ======================================-->
</div>

@endsection