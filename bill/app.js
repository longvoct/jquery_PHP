let moneyTotal = 0;
let add = 0;
$(document).ready(function () {
  handleAddItems();
  handleSelect();
  handlePayment();
});

function handleAddItems() {
  let index = 1;
  let arr = new Array();
  $("li").each(function () {
    let $this = $(this);
    $this.click(function () {
      moneyTotal += parseInt($this.attr("value"));
      console.log(moneyTotal);
      const idItem = $(this)[0];
      if (!arr.find((item) => item == idItem.id)) {
        arr.push(idItem.id);
        console.log(arr);
        console.log($this.attr("id"));
        $("table").append(`<tr id=${$this.attr("id")}>
        <td>${index}</td>
        <td>${$this.text()}</td>
        <td>${$this.attr("value")}</td>
        </tr>`);
        index++;
      } else {
        console.log("idItem ", idItem);
        const arrTable = $("table").find("tr");
        arrTable.each(function () {
          $item = $(this);
          if ($item.attr("id") === idItem.id) {
            const temp = $item[0];
            const value = temp.children[2];
            const price = parseInt(value.textContent) + idItem.value;
            value.textContent = `${price}`;
          }
        });
      }
    });
  });
}

function handleSelect() {
  $("input").each(function () {
    let $this = $(this);
    $this.click(function () {
      if ($this.attr("id") === "daytime") add = 0.2;
      else add = 0;
    });
  });
  return add;
}

function handlePayment() {
  $(".btn").click(function () {
    moneyTotal += moneyTotal * add;
    $(".detail-box").css("display", "block");
    $("table").css("display", "auto").append(`<tr>
    <td colspan="2">Tổng tiền</td>
    <td class="sumPrice">${moneyTotal}</td>
  </tr>`);
  });
}
