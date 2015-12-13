using UnityEngine;
using System.Collections;
using UnityEngine.UI;

public class GameManager : MonoBehaviour {
	
	public string uid;
	public Text Uiid;

	// Use this for initialization
	void Start () {
		Application.ExternalCall("SayHello"); //等待unity載入完成後，呼叫javascript function
    }
	
	// Update is called once per frame
	void Update () {
    }
	
	//從網頁讀入玩家id
	public void SayHello(string data){
		uid = data;
		Uiid.text = uid;
	}
}
