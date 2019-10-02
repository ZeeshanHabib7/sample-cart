
		var item = [];
		var qty = [];
		var price = [];
		var total = [];
		// var list5 = [];

		var n = 1;
		var x = 0;

		function AddRow(){

			var AddRown = document.getElementById('show');
			var NewRow = AddRown.insertRow(n);

			item[x] = document.getElementById("item").value;
			qty[x] = document.getElementById("box1").value;
			price[x] = document.getElementById("box2").value;
			total[x] = document.getElementById("result").value;
			// list5[x] = document.getElementById("total").value;

			var cel1 = NewRow.insertCell(0);
			var cel2 = NewRow.insertCell(1);
			var cel3 = NewRow.insertCell(2);
			var cel4 = NewRow.insertCell(3);
			// var cel5 = NewRow.insertCell(4);

			cel1.innerHTML = item[x];
			cel2.innerHTML = qty[x];
			cel3.innerHTML = price[x];
			cel4.innerHTML = total[x];
			// cel5.innerHTML = list5[x];

			n++;
			x++;
		}