let mcInfra = document.getElementById("MCInfra");

let xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", "./endpoints_result.json", true);

let infrastat = null;
xmlHttp.onreadystatechange = function(){
    if(xmlHttp.readyState == 4){
        if(xmlHttp.status == 200){
            infrastat = JSON.parse(xmlHttp.responseText);
            genMCSection(infrastat.Minecraft);
        }else{
            alert("An error has occured! This site may be experiencing issues. (It's ironic, we know.");
        }
    }
};

xmlHttp.send();

function genMCSection(data){
    let retHtml = `<div class="gameSection" id="MCInfra">`;
    let nodes = Object.keys(data);
    nodes.forEach(
        function(node){
            retHtml +=
            `
                <div class="nodeSection">
                    <span class="nodeHeaderLeft">
                        ${node}
                    </span>

                    <span class="nodeHeaderRight">
                        <font id="mc-network-status">online/slow/offline</font>
                    </span>
                    <br/>
                    <hr/>
            `;

            let instances = Object.keys(data[node]);

            if(instances.length > 0){
                retHtml += `<table id="status_display">`;
            }

            instances.forEach(
                function(instance){
                    retHtml +=
                    `
                        <tr>
                            <td class="target"> ${data[node][instance].name} </td>
                            <td class="result">
                                <span>[${data[node][instance].usersOnline}]</span>
                                <font class="${(data[node][instance].online)? "online" : "offline"}">
                                    ${(data[node][instance].online)? "Online" : "Offline"}
                                </font>
                            </td>
                        </tr>
                    `;
                }
            );

            if(instances.length > 0){
                retHtml += `</table>`;
            }

            retHtml += `</div>`;
        }
    );

    retHtml += `</div>`;
    document.getElementById("MCInfra").innerHTML += retHtml;
}
