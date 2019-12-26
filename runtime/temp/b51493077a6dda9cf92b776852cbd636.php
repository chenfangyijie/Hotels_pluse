<?php /*a:1:{s:72:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\finance\index.html";i:1577335493;}*/ ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="height:400px"></div>
<!-- ECharts单文件引入 -->
<script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
<script type="text/javascript">
    // 路径配置
    require.config({
        paths: {
            echarts: 'http://echarts.baidu.com/build/dist'
        }
    });

    // 使用
    require(
            [
                'echarts',
                'echarts/chart/bar' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main'));

                option = {
                    title: {
                        x: 'center',
                        text: '酒店数据统计',
                        subtext: 'Hyacinth',
                        link: 'http://echarts.baidu.com/doc/example.html'
                    },
                    tooltip: {
                        trigger: 'item'
                    },
                    toolbox: {
                        show: true,
                        feature: {
                            dataView: {show: true, readOnly: false},
                            restore: {show: true},
                            saveAsImage: {show: true}
                        }
                    },
                    calculable: true,
                    grid: {
                        borderWidth: 0,
                        y: 80,
                        y2: 60
                    },
                    xAxis: [
                        {
                            type: 'category',
                            show: false,
                            data: ['预订', '入住', '空闲', '待打扫', '维修', '今日销售金额', '周销售金额', '月销售金额']
                        }
                    ],
                    yAxis: [
                        {
                            type: 'value',
                            show: false
                        }
                    ],
                    series: [
                        {
                            name: '酒店数据统计',
                            type: 'bar',
                            itemStyle: {
                                normal: {
                                    color: function(params) {
                                        // build a color map as your need.
                                        var colorList = [
                                            '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                                            '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                                            '#D7504B','#C6E579'
                                        ];
                                        return colorList[params.dataIndex]
                                    },
                                    label: {
                                        show: true,
                                        position: 'top',
                                        formatter: '{b}\n{c}'
                                    }
                                }
                            },
                            data: [<?php echo htmlentities($res); ?>,<?php echo htmlentities($checkin); ?>,<?php echo htmlentities($free); ?>,<?php echo htmlentities($clean); ?>,<?php echo htmlentities($repair); ?>,<?php echo htmlentities($today); ?>,<?php echo htmlentities($week); ?>,<?php echo htmlentities($month); ?>],
                            markPoint: {
                                tooltip: {
                                    trigger: 'item',
                                    backgroundColor: 'rgba(0,0,0,0)',
                                    formatter: function(params){
                                        return '<img src="'
                                                + params.data.symbol.replace('image://', '')
                                                + '"/>';
                                    }
                                },
                                data: [
                                    {xAxis:0, y: 350, name:'预订', symbolSize:20, symbol: 'image://../asset/ico/折线图.png'},
                                    {xAxis:1, y: 350, name:'入住', symbolSize:20, symbol: 'image://../asset/ico/柱状图.png'},
                                    {xAxis:2, y: 350, name:'退房', symbolSize:20, symbol: 'image://../asset/ico/散点图.png'},
                                    {xAxis:3, y: 350, name:'待打扫', symbolSize:20, symbol: 'image://../asset/ico/K线图.png'},
                                    {xAxis:4, y: 350, name:'维修', symbolSize:20, symbol: 'image://../asset/ico/饼状图.png'},
                                    {xAxis:5, y: 350, name:'天', symbolSize:20, symbol: 'image://../asset/ico/雷达图.png'},
                                    {xAxis:6, y: 350, name:'周', symbolSize:20, symbol: 'image://../asset/ico/和弦图.png'},
                                    {xAxis:7, y: 350, name:'月', symbolSize:20, symbol: 'image://../asset/ico/力导向图.png'}
                                ]
                            }
                        }
                    ]
                };

                // 为echarts对象加载数据
                myChart.setOption(option);
            }
    );
</script>
</body>