using UnityEngine;
using System.Collections;

public class GiftSend : MonoBehaviour {
	
	public GameObject GiftSendObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		GiftSendObject.SetActive (true);
	}
	
	public void disappear()
	{
		GiftSendObject.SetActive (false);
	}
}