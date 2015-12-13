using UnityEngine;
using System.Collections;

public class MissionMain : MonoBehaviour {
	
	public GameObject MissionMainObject;
    public GameObject ButtonActive;
    public GameObject ButtonInactive;

    // Use this for initialization
    void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
	
	public void appear()
	{
		MissionMainObject.SetActive (true);
        ButtonActive.SetActive(true);
        ButtonInactive.SetActive(false);
    }
	
	public void disappear()
	{
		MissionMainObject.SetActive (false);
        ButtonActive.SetActive(false);
        ButtonInactive.SetActive(true);
    }
}