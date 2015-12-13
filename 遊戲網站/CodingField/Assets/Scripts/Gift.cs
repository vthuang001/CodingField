using UnityEngine;
using System.Collections;

public class Gift : MonoBehaviour {
	
	public GameObject GiftObject;
	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		GiftObject.SetActive (true);
	}
	
	public void disappear()
	{
		GiftObject.SetActive (false);
	}
}