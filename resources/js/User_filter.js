function Hide(divsToHide) {
                for(var i = 0; i < divsToHide.length; i++){
                    divsToHide[i].style.display = "none"; // depending on what you're doing
                }
            }

            function Show(divsToHide) {
                    for(var i = 0; i < divsToHide.length; i++){
                    divsToHide[i].style.display = "block"; // depending on what you're doing
                }
            }

            document.getElementById("btn_Admin").onclick = function(){
                Hide(document.getElementsByClassName("student"));
                Hide(document.getElementsByClassName("representative"));
                Hide(document.getElementsByClassName("pilot"));
                Show(document.getElementsByClassName("admin"));
            }

            document.getElementById("btn_Pilot").onclick = function(){
                Hide(document.getElementsByClassName("student"));
                Hide(document.getElementsByClassName("representative"));
                Show(document.getElementsByClassName("pilot"));
                Hide(document.getElementsByClassName("admin"));
            }

            document.getElementById("btn_Student").onclick = function(){

                Show(document.getElementsByClassName("student"));
                Show(document.getElementsByClassName("representative"));
                Hide(document.getElementsByClassName("pilot"));
                Hide(document.getElementsByClassName("admin"));
            }

            document.getElementById("btn_Representative").onclick = function(){
                Hide(document.getElementsByClassName("student"));
                Show(document.getElementsByClassName("representative"));
                Hide(document.getElementsByClassName("pilot"));
                Hide(document.getElementsByClassName("admin"));
            }

            document.getElementById("btn_User").onclick = function(){
                Show(document.getElementsByClassName("student"));
                Show(document.getElementsByClassName("representative"));
                Show(document.getElementsByClassName("pilot"));
                Show(document.getElementsByClassName("admin"));
            }
