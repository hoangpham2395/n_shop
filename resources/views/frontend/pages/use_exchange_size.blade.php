@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('use_exchange_size')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">{{transa('use_exchange_size')}}</h2>
                    <p class="text-justify">
                        Để giúp quý khách lựa chọn size phù hợp thì cửa hàng có đưa ra bảng quy đổi size để quý khách có thể tham khảo.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">1. Bảng quy đổi size áo, quần, váy nữ qua size Việt Nam</h5>
                    <table class="table table-hover p-b-20">
                        <thead class="thead-inverse">
                        <th>Kích cỡ US</th>
                        <th>Kích cỡ UK</th>
                        <th>Vòng ngực (cm)</th>
                        <th>Chiều cao (cm)</th>
                        <th>Vòng eo (cm)</th>
                        <th>Vòng mông (cm)</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>S</td>
                            <td>6</td>
                            <td>74 - 77</td>
                            <td>146 - 148</td>
                            <td>63 - 65</td>
                            <td>80 - 82</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>8</td>
                            <td>78 - 82</td>
                            <td>149 - 151</td>
                            <td>65,5 66,5</td>
                            <td>82,5 - 84,5</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>10</td>
                            <td>83 - 87</td>
                            <td>152 - 154</td>
                            <td>67 - 69</td>
                            <td>85-87</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>12</td>
                            <td>88 - 92</td>
                            <td>155 - 157</td>
                            <td>69,5 - 71,5</td>
                            <td>87,5 - 89,5</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>14</td>
                            <td>93 - 97</td>
                            <td>158 - 160</td>
                            <td>72- 74</td>
                            <td>90 -92</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>16</td>
                            <td>98-102</td>
                            <td>161 - 163</td>
                            <td>74,5 - 76,5</td>
                            <td>92,5 - 94,5</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>18</td>
                            <td>103 - 107</td>
                            <td>164 - 166</td>
                            <td>77 - 79</td>
                            <td>95 - 97</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>20</td>
                            <td>108 - 112</td>
                            <td>167 - 169</td>
                            <td>79,5 - 81,5</td>
                            <td>97,5 - 99,5</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover p-b-20">
                        <thead class="thead-inverse">
                        <th>Cỡ số vòng bụng (inches)</th>
                        <th>Vòng bụng (cm)</th>
                        <th>Cỡ số chiều cao toàn thân (inches)</th>
                        <th>Chiều cao toàn thân (cm)</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>25</td>
                            <td>66 - 67,5</td>
                            <td>25</td>
                            <td>146 - 151</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>67,5 - 70</td>
                            <td>26</td>
                            <td>152-154</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>70 -72,5</td>
                            <td>27</td>
                            <td>155 - 157</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>72,5 - 75</td>
                            <td>28</td>
                            <td>158-160</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>75 - 77,5</td>
                            <td>28</td>
                            <td>161 - 163</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>77,5 - 80</td>
                            <td>30</td>
                            <td>164-166</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>80 - 82,5</td>
                            <td>31</td>
                            <td>167 - 169</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>82,5 - 85</td>
                            <td>32</td>
                            <td>170 - 172</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">2. Bảng quy đổi giầy nữ</h5>
                    <table class="table table-hover p-b-20">
                        <thead class="thead-inverse">
                        <th>Size US</th>
                        <th>Size VN</th>
                        <th>Size UK</th>
                        <th>Inches</th>
                        <th>Centimet</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4</td>
                            <td>34 - 35</td>
                            <td>2</td>
                            <td>8,1875</td>
                            <td>20,8</td>
                        </tr>
                        <tr>
                            <td>4,5</td>
                            <td>35</td>
                            <td>2,5</td>
                            <td>8,375</td>
                            <td>21,3</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>35 - 36</td>
                            <td>3</td>
                            <td>8,5</td>
                            <td>21,6</td>
                        </tr>
                        <tr>
                            <td>5,5</td>
                            <td>36</td>
                            <td>3,5</td>
                            <td>8,75</td>
                            <td>22,2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>36 - 37</td>
                            <td>4</td>
                            <td>8,875</td>
                            <td>22,5</td>
                        </tr>
                        <tr>
                            <td>6,5</td>
                            <td>37</td>
                            <td>4,5</td>
                            <td>9,0625</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>37 -38</td>
                            <td>5</td>
                            <td>9,25</td>
                            <td>23,5</td>
                        </tr>
                        <tr>
                            <td>7,5</td>
                            <td>38</td>
                            <td>5,5</td>
                            <td>9,375</td>
                            <td>23,8</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>38-39</td>
                            <td>6</td>
                            <td>9,5</td>
                            <td>24,1</td>
                        </tr>
                        <tr>
                            <td>8,5</td>
                            <td>39</td>
                            <td>6,5</td>
                            <td>9,6875</td>
                            <td>24,6</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>39-40</td>
                            <td>7</td>
                            <td>9,875</td>
                            <td>25,1</td>
                        </tr>
                        <tr>
                            <td>9,5</td>
                            <td>40</td>
                            <td>7,5</td>
                            <td>10</td>
                            <td>25,4</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>40 - 41</td>
                            <td>8</td>
                            <td>10,1875</td>
                            <td>25,9</td>
                        </tr>
                        <tr>
                            <td>10,5</td>
                            <td>41</td>
                            <td>8,5</td>
                            <td>10,3125</td>
                            <td>26,2</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>41-42</td>
                            <td>9</td>
                            <td>10,5</td>
                            <td>26,7</td>
                        </tr>
                        <tr>
                            <td>11,5</td>
                            <td>42</td>
                            <td>9,5</td>
                            <td>10,6875</td>
                            <td>27,1</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>42 - 43</td>
                            <td>9,5</td>
                            <td>10,6875</td>
                            <td>27,6</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
