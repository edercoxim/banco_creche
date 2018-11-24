$(function () {
    var arrayPresenca = [];
    var arrayFalta = [];
    var matriculasArray = [];
    window.chamada = function (id) {
        // console.log('leu arquivo',id);
        verficaDuplicada(id);
        console.log('presenca', arrayPresenca);
        console.log('falta', arrayFalta);

    };
    window.matricula = function (matriculas) {
        for (var matricula in matriculas) {

            verficaArrayFalta(matriculas[matricula].id);
        }
        matriculasArray = matriculas;
        console.log('array falta', arrayFalta);
    };
    $('#chamada').on('click', function () {
        var _data = {
            presenca: arrayPresenca,
            falta: arrayFalta,
            data: $('#dia').val()
        };
        var _url = '/chamadas/realizar-chamada/' + arrayPresenca + '/' + arrayFalta + '/' + $('#dia').val();
        console.log(_url);
        $.ajax({
            url: _url,
            method: 'get',
            // data:_data,
            success: function (response) {

                var r = confirm(response);
                if (r == true) {
                    window.location.reload();
                } else {

                }
            }
        })
    });

    function verficaDuplicada(id) {
        var index = arrayPresenca.findIndex(function (_index) {
            if (id === _index) {
                return _index;
            }
        });

        if (index != -1) {
            arrayPresenca.splice(index, 1);
            verficaArrayFalta(id);
        } else {
            verficaArrayFalta(id);
            arrayPresenca.push(id);
        }

    }

    function verficaArrayFalta(id) {
        var index = arrayFalta.findIndex(function (_index) {
            if (id === _index) {
                return _index;
            }

        });

        if (index != -1) {
            arrayFalta.splice(index, 1);

        } else {

            arrayFalta.push(id);
        }

    }

    $('#dia').on('change', function () {
        var data = $('#dia').val();
        console.log('data', data);
    });

});