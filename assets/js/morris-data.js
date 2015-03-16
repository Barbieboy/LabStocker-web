$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2013 Q1',
            sais: 2666,
            acidos: null,
            bases: 2647
        }, {
            period: '2013 Q2',
            sais: 2778,
            acidos: 2294,
            bases: 2441
        }, {
            period: '2013 Q3',
            sais: 4912,
            acidos: 1969,
            bases: 2501
        }, {
            period: '2013 Q4',
            sais: 3767,
            acidos: 3597,
            bases: 5689
        }, {
            period: '2014 Q1',
            sais: 6810,
            acidos: 1914,
            bases: 2293
        }, {
            period: '2014 Q2',
            sais: 5670,
            acidos: 4293,
            bases: 1881
        }, {
            period: '2014 Q3',
            sais: 4820,
            acidos: 3795,
            bases: 1588
        }, {
            period: '2014 Q4',
            sais: 15073,
            acidos: 5967,
            bases: 5175
        }, {
            period: '2015 Q1',
            sais: 10687,
            acidos: 4460,
            bases: 2028
        }, {
            period: '2015 Q2',
            sais: 8432,
            acidos: 5713,
            bases: 1791
        }],
        xkey: 'period',
        ykeys: ['sais', 'acidos', 'bases'],
        labels: ['Sais Inorgânicos', 'Ácidos Inorgânicos', 'Bases e Metais'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Reagentes Orgânicos",
            value: 12
        }, {
            label: "Sais Inorgânicos",
            value: 30
        }, {
            label: "Bases e Metais",
            value: 20
        }, {
            label: "Ácidos Inorgânicos",
            value: 100
        }, {
            label: "Oxidantes",
            value: 20
        }, {
            label: "Indicadores",
            value: 40
        }, {
            label: "Soluções - Aulas Práticas",
            value: 5
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});