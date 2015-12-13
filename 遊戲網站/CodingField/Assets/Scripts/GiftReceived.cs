using UnityEngine;
using System.Collections;

public class GiftReceived : MonoBehaviour {
	
	public GameObject GiftReceivedObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		GiftReceivedObject.SetActive (true);
	}
	
	public void disappear()
	{
		GiftReceivedObject.SetActive (false);
	}
}