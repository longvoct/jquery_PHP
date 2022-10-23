let moneyTotal = 0;
let add = 0;
$(document).ready(function () {
  handleAddItems();
  handleSelect();
  $(".btn").click(function () {
    handlePayment();
  });
  const temp = `<div class="sweet-alert">
  <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
  <span>This function has not been coded yet !</span>
</div>`;

  $(document).on("click", ".trash", function () {
    if ($(".sweet-alert")) $(".sweet-alert").remove();
    $this = $(this);
    $("body").append(temp);
  });
});

function handleAddItems() {
  let index = 1;
  let arr = new Array();
  $("li").each(function () {
    let $this = $(this);
    $this.click(function () {
      $(".tong-tien").remove();
      $(".detail-box").css("display", "block");
      moneyTotal += parseInt($this.attr("value"));
      const idItem = $(this)[0];
      if (!arr.find((item) => item == idItem.id)) {
        arr.push(idItem.id);
        $("table").append(`<tr id=${$this.attr("id")}>
        <td>${index}</td>
        <td>${$this.text()}</td>
        <td>1</td>
        <td>${$this.attr("value")}</td>
        <td><div class="trash"> <i class="fa-solid fa-trash"></i> </div></td>
        </tr>`);
        index++;
      } else {
        const arrTable = $("table").find("tr");
        arrTable.each(function () {
          $item = $(this);
          if ($item.attr("id") === idItem.id) {
            const temp = $item[0];
            const value = temp.children[3];
            const price = parseInt(value.textContent) + idItem.value;
            const count = temp.children[2];
            const tempCount = price / idItem.value;
            count.textContent = `${tempCount}`;
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
      if ($this.attr("id") === "night") add = 0.2;
      else add = 0;
    });
  });
  return add;
}

function handlePayment() {
  $(".selection").css({ opacity: "0.3", "pointer-events": "none" });
  let temp = moneyTotal + moneyTotal * add;
  $(".tong-tien").remove();
  $("table").css("display", "auto").append(`<tr class="tong-tien">
    <td colspan="3" class="tongtien">Tổng tiền</td>
    <td colspan="2">${temp}</td>
  </tr>`);
}
