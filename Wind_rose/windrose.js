(function (global) {
  global.WindRose = function (chartRadius, sectionCount, levelCount, labels, labels2, labels3, values, values2, values3, 
  values4, values5, values6, values7, colors, colors2, colors3, colors4, colors5, colors6, colors7){ 
  //veličinaKruga, brojPodjela, rasponKolonije, slova, brojevi, boje
    var paper = Raphael("windrose", 2*(chartRadius+50), 2*(chartRadius+50)), sectionSize = 360/sectionCount,  sections = [], labelPos = []; 
	//paper je koliko piksela ima cijeli krug odnosno platno na kojem se prikazuje slika
	// sectionSize je koliko ima odjeljaka, 360/16
       
    labels.reverse();  //underscore.js funkcija, okretanje smjera obrnuto od kazaljke na satu

    function sector(cx, cy, r, startAngle, endAngle, fill) { //cx, cy - x i y koordinata centra, r-polumjer, startAngle- početni kut, fill- ispuna
      var rad = Math.PI / 180,		//radijus = PI/180
          x1 = cx + r * Math.cos(-startAngle * rad),		//kosinus(-početni kut*radijus)
          x2 = cx + r * Math.cos(-endAngle * rad),		//kosinus(-zadnjii kut*radijus)		
          xm = cx + r / 2 * Math.cos(-(startAngle + (endAngle - startAngle) / 2) * rad),	//kosinus(-(početni kut+(krajnji-početni kut)/2)*radijus)
          y1 = cy + r * Math.sin(-startAngle * rad),		//sinus(-početni kut*radijus)
          y2 = cy + r * Math.sin(-endAngle * rad),		//sinus(-krajnji kut/radijus)
          ym = cy + r / 2 * Math.sin(-(startAngle + (endAngle - startAngle) / 2) * rad),		//sinus(-(početni kut+(krajnji-početni kut)/2)*radijus)
          res = [						//niz sa ovim parametrima
              "M", cx, cy,
              "L", x1, y1,
              "A", r, r, 0, +(Math.abs(endAngle - startAngle) > 180), +(Math.abs(endAngle - startAngle) > 180), x2, y2,
              "z"
          ];

      
      return res;
    }
    function getAngle(center, x, y) {		//postaviti kut; 
      var quadMod = 0;
      if(x < center) {
        quadMod = 180;
      }
      else if (y > center) {
        quadMod = 360;
      }
      return Raphael.deg((Math.atan((center - y) / (x - center)))) + quadMod;		
    }

    function getLevel(center, x, y, angle) {		//postaviti stupanj
      var adjstX = center - x;
      var adjstY = center - y;
      return getSectorLevel(		
        Math.cos(Raphael.rad(angle - getAngle(center, x, y)))* 
		Math.sqrt(adjstX*adjstX + adjstY*adjstY));
    }

	 function getSectorLevel(radius) {
      return Math.ceil(radius / (1.0 * chartRadius / levelCount));		
    }
	
    function getSectorRadius(level) {
      return (1.0 * chartRadius / levelCount) * level;
    }

    function getLabel(n) {
      var newRadius = chartRadius + 25; // udaljenost slova od kruga
      var x = chartRadius+50 + newRadius * Math.cos(Raphael.rad((n+11)+(sectionSize/2))); //pomice slova desno
      var y = chartRadius+50 + newRadius * Math.sin(Raphael.rad((n+11)+(sectionSize/2))); //pomice slova dolje

      return paper.text(x, y, labels[n/sectionSize]);
    }
	
	function getLabel2(n) {
      var newRadius = chartRadius - 20; // udaljenost slova od kruga
      var x = chartRadius+50 + newRadius * Math.cos(Raphael.rad((n+7)+(sectionSize/2))); //pomice slova desno
      var y = chartRadius+50 + newRadius * Math.sin(Raphael.rad((n+11)+(sectionSize/2))); //pomice slova dolje

      return paper.text(x, y, labels2[n/sectionSize]); //paper.text-->raphael naredba
    }
	
	function getLabel3(n) {
      var newRadius = chartRadius - 80; // udaljenost slova od kruga
      var x = chartRadius+50 + newRadius * Math.cos(Raphael.rad((n+5)+(sectionSize/2))); //pomice slova desno
      var y = chartRadius+50 + newRadius * Math.sin(Raphael.rad((n+11)+(sectionSize/2))); //pomice slova dolje

      return paper.text(x, y, labels3[n/sectionSize]); //paper.text-->raphael naredba
    }
   
    _.each(_.range(0, 360, sectionSize), function (n) { //iz underscore.js

      // Predstavlja pozadinu (krugove)
      var outline1 = paper.path(sector(chartRadius+50, chartRadius+50, chartRadius, n, n+sectionSize)).
                          attr({stroke: "#989A9D", "stroke-width": 1})	//stroke-width-širina kruga; fill-boja ispunjenja kruga; stroke-boja kruga
	  var outline2 = paper.path(sector(chartRadius+50, chartRadius+50, chartRadius-85, n, n+sectionSize)).
                          attr({stroke: "#989A9D", "stroke-width": 0.7})	//stroke-width-širina kruga; fill-boja ispunjenja kruga; stroke-boja kruga
	  var outline3 = paper.path(sector(chartRadius+50, chartRadius+50, chartRadius-25, n, n+sectionSize)).
                          attr({stroke: "#989A9D", "stroke-width": 0.7})	//stroke-width-širina kruga; fill-boja ispunjenja kruga; stroke-boja kruga
                        
      // Predstavlja ispunjene sekcije, 7 boja
      // TODO inicijalizira djelove na ispravnim razinama
	  sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values7[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors7[n/sectionSize], stroke: colors7[n/sectionSize]})
      );
	  sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values6[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors6[n/sectionSize], stroke: colors6[n/sectionSize]})
      );
	  sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values5[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors5[n/sectionSize], stroke: colors5[n/sectionSize]})
      );
	  sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values4[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors4[n/sectionSize], stroke: colors4[n/sectionSize]})
      );
	  sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values3[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors3[n/sectionSize], stroke: colors3[n/sectionSize]})
      );
	   sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values2[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors2[n/sectionSize], stroke: colors2[n/sectionSize]})
      );
      sections.push(
        paper.path(sector(chartRadius+50, chartRadius+50, getSectorRadius(values[n/sectionSize]), n+13.5, (n+7.5)+sectionSize)).
              attr({fill: colors[n/sectionSize], stroke: colors[n/sectionSize]})
      );
	
      // stavlja slova na graf
      labelPos.push(getLabel(n)); //strane svijeta
	  labelPos.push(getLabel2(n)); //10%
	  labelPos.push(getLabel3(n)); //5%
	 
    });

	//Pomiče ispunjene dijelova sprijeda za pokrivanje pozadinskih crta 
    _.each(sections, function(s) {s.toFront()}); //naredba od underscore.js
    _.each(labelPos, function(l) {l.toFront()});
    return paper;
  };
})(window);
