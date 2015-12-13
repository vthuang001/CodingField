using UnityEngine;
using System.Collections;

public class MissionDaily : MonoBehaviour {
	
	public GameObject MissionDailyObject;
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
        MissionDailyObject.SetActive(true);
        ButtonActive.SetActive(true);
        ButtonInactive.SetActive(false);
    }

    public void disappear()
    {
        MissionDailyObject.SetActive(false);
        ButtonActive.SetActive(false);
        ButtonInactive.SetActive(true);
    }
}